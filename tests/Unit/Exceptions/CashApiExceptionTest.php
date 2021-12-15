<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Tests\Unit\Exceptions;

use Webparking\LaravelCash\Exceptions\CashApiException;
use Webparking\LaravelCash\Tests\TestCase;

final class CashApiExceptionTest extends TestCase
{
    public function testWithErrors(): void
    {
        $errorXml = simplexml_load_string(file_get_contents(__DIR__ . '/../../data/errors/cash-errors.xml'));

        $exception = new CashApiException('Test', $errorXml);

        self::assertCount(1, $exception->getErrors());
        self::assertSame('Ongeldige waarde 0101=123456', $exception->getErrors()[0]);
    }
}
