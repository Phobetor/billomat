<?php

namespace Phobetor\Billomat\Client\Listener;

use Guzzle\Common\Event;
use Phobetor\Billomat\Exception\InvalidParameterException;
use Phobetor\Billomat\Exception\ExceptionListException;
use Phobetor\Billomat\Exception\NoResponseException;
use Phobetor\Billomat\Exception\UnknownErrorException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Map Billomat error messages to exceptions
 *
 * @licence MIT
 */
class ErrorHandlerListener implements EventSubscriberInterface
{
    /**
     * List of Billomat error codes, that map to a Billomat exception
     *
     * @var array
     */
    private $errorMap = array(
        'unknown error'             => 'Phobetor\Billomat\Exception\UnknownErrorException',
        'resource not found'        => 'Phobetor\Billomat\Exception\ResourceNotFoundException',
        // this is a typo in the error message, returned by the API
        'ressource not found'       => 'Phobetor\Billomat\Exception\ResourceNotFoundException',
        'row not found'             => 'Phobetor\Billomat\Exception\ResourceNotFoundException',
        'not found'                 => 'Phobetor\Billomat\Exception\ResourceNotFoundException',
        'no valid'                  => 'Phobetor\Billomat\Exception\InvalidParameterException',
    );

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array('request.exception' => 'handleError');
    }

    /**
     * @internal
     * @param  Event $event
     * @return null
     * @throws \Phobetor\Billomat\Exception\ExceptionInterface
     */
    public function handleError(Event $event)
    {
        if (empty($event['response']) || !$event['response'] instanceof \Guzzle\Http\Message\Response) {
            throw new NoResponseException('No response found', 0);
        }

        /** @var \Guzzle\Http\Message\Response $response */
        $response = $event['response'];

        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) {
            return null;
        }

        $result    = json_decode($response->getBody(), true);
        $errorName = isset($result['errors']['error']) ? $result['errors']['error'] : 'Unknown error';

        if (is_array($errorName)) {
            $exception = new ExceptionListException('', $statusCode);
            foreach ($errorName as $singleErrorName) {
                $exception->addException(
                    $this->createExceptionFromErrorMessage($singleErrorName, $statusCode)
                );
            }
        }
        else {
            $exception = $this->createExceptionFromErrorMessage($errorName, $statusCode);
        }

        throw $exception;
    }

    /**
     * @param string $errorName
     * @param int $statusCode
     * @return \Phobetor\Billomat\Exception\InvalidParameterException
     */
    public function createExceptionFromErrorMessage($errorName, $statusCode)
    {
        if (0 === stripos($errorName, 'No valid') || false !== stripos($errorName, 'Not valid') || false !== stripos($errorName, 'Invalid')) {
            return new InvalidParameterException($errorName, $statusCode);
        }

        if (empty($this->errorMap[strtolower($errorName)])) {
            return new UnknownErrorException($errorName, $statusCode);
        }

        return new $this->errorMap[strtolower($errorName)]($errorName, $statusCode);
    }
}
