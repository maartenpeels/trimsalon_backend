<?php

namespace App\Exceptions;

use Exception;

class ValidatorException extends Exception
{
    public $errors;

    public function __construct($message, $errors, $code, Exception $previous = NULL)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }
}
