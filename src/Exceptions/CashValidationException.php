<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Exceptions;

class CashValidationException extends CashApiException
{
    public function __construct(\SimpleXMLElement $errorXml, int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct('Your input contains errors', $errorXml, $code, $previous);
    }
}
