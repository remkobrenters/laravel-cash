<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Exceptions;

class CashApiException extends \Exception
{
    public \SimpleXMLElement $errorXml;

    public function __construct(string $message, \SimpleXMLElement $errorXml, int $code = 0, ?\Throwable $previous = null)
    {
        $this->errorXml = $errorXml;

        parent::__construct($message, $code, $previous);
    }

    public function getErrors(): array
    {
        dump($this->errorXml);

        return array_map(fn (\SimpleXMLElement $error) => (string) $error->message, $this->errorXml->xpath('errors/error'));
    }
}
