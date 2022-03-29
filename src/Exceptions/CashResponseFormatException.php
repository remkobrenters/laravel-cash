<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Exceptions;

class CashResponseFormatException extends \Exception
{
    private string $response;

    public function __construct(string $message, string $response)
    {
        $this->response = $response;
        parent::__construct($message);
    }

    /** @return array<string, string> */
    public function context(): array
    {
        return [
            'response' => $this->response,
        ];
    }
}
