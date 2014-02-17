<?php

namespace Phobetor\Billomat\Exception;

use RuntimeException;

/**
 * Exception to bundle multiple errors (e. g. for operations with various parameters)
 *
 * @licence MIT
 */
class ExceptionListException extends RuntimeException implements ExceptionInterface
{
    /**
     * @var \Phobetor\Billomat\Exception\ExceptionInterface[]
     */
    private $exceptions = array();

    /**
     * @param \Phobetor\Billomat\Exception\ExceptionInterface $e
     */
    public function addException(ExceptionInterface $e) {
        $this->exceptions[] = $e;
        $this->message = $this->combineExceptionMessages();
    }

    /**
     * @return \Phobetor\Billomat\Exception\ExceptionInterface[]
     */
    public function getExceptions() {
        return $this->exceptions;
    }

    /**
     * @return string
     */
    private function combineExceptionMessages() {
        $messages = array();

        /** @var \Exception $e */
        foreach ($this->exceptions as $e) {
            $messages[] = $e->getMessage();
        }

        return implode('|', $messages);
    }
}
