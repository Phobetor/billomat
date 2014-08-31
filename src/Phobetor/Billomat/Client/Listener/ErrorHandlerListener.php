<?php

namespace Phobetor\Billomat\Client\Listener;

use Guzzle\Common\Event;
use Phobetor\Billomat\Exception\BadRequestException;
use Phobetor\Billomat\Exception\ExceptionListException;
use Phobetor\Billomat\Exception\NoResponseException;
use Phobetor\Billomat\Exception\NotFoundException;
use Phobetor\Billomat\Exception\TooManyRequestsException;
use Phobetor\Billomat\Exception\UnauthorizedException;
use Phobetor\Billomat\Exception\UnknownErrorException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Map Billomat errors to exceptions
 *
 * @licence MIT
 */
class ErrorHandlerListener implements EventSubscriberInterface
{
    const STATUS_OK                 = 200;
    const STATUS_CREATED            = 201;
    const STATUS_BAD_REQUEST        = 400;
    const STATUS_UNAUTHORIZED       = 401;
    const STATUS_NOT_FOUND          = 404;
    const STATUS_TOO_MANY_REQUESTS  = 429;

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array('request.exception' => 'handleError');
    }

    /**
     * @internal
     * @param  \Guzzle\Common\Event $event
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

        switch ($statusCode) {
            case self::STATUS_OK:
            case self::STATUS_CREATED:
                return null;
        }

        $result    = json_decode($response->getBody(), true);
        $errorName = isset($result['errors']['error']) ? $result['errors']['error'] : 'Unknown error';

        if (is_array($errorName)) {
            $exception = new ExceptionListException('', $statusCode);
            foreach ($errorName as $singleErrorName) {
                $exception->addException(
                    $this->createExceptionFromStatusCode($singleErrorName, $statusCode)
                );
            }
        }
        else {
            $exception = $this->createExceptionFromStatusCode($errorName, $statusCode);
        }

        throw $exception;
    }

    /**
     * @param string $errorName
     * @param int $statusCode
     * @return \Phobetor\Billomat\Exception\ExceptionInterface
     */
    public function createExceptionFromStatusCode($errorName, $statusCode)
    {
        $exception = null;
        switch ($statusCode) {
            case self::STATUS_NOT_FOUND:
                return new NotFoundException($errorName, $statusCode);
            case self::STATUS_BAD_REQUEST:
                return new BadRequestException($errorName, $statusCode);
            case self::STATUS_UNAUTHORIZED:
                return new UnauthorizedException($errorName, $statusCode);
            case self::STATUS_TOO_MANY_REQUESTS:
                return new TooManyRequestsException($errorName, $statusCode);
            default:
                return new UnknownErrorException($errorName, $statusCode);
        }
    }
}
