<?php

namespace Phobetor\Billomat\Exception;

use RuntimeException;

/**
 * @licence MIT
 */
class TooManyRequestsException extends RuntimeException implements ExceptionInterface
{
    /**
     * @var int
     */
    private $rateLimitRemaining;

    /**
     * @var int
     */
    private $rateLimitReset;

    /**
     * @param int $rateLimitRemaining
     */
    public function setRateLimitRemaining($rateLimitRemaining)
    {
        $this->rateLimitRemaining = (int)$rateLimitRemaining;
    }

    /**
     * @return int
     */
    public function getRateLimitRemaining()
    {
        return $this->rateLimitRemaining;
    }

    /**
     * @param int $rateLimitReset
     */
    public function setRateLimitReset($rateLimitReset)
    {
        $this->rateLimitReset = (int)$rateLimitReset;
    }

    /**
     * @return int
     */
    public function getRateLimitReset()
    {
        return $this->rateLimitReset;
    }
}
