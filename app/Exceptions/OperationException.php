<?php

namespace App\Exceptions;

use Throwable;

class OperationException extends \Exception
{
    /**
     * OperationException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    const ERROR_CODE_NOT_FOUND = 404;
}
