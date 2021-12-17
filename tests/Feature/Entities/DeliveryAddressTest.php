<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Tests\Feature\Entities;

use Artisaninweb\SoapWrapper\Service;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Webparking\LaravelCash\Entities\DeliveryAddress;
use Webparking\LaravelCash\Enums\TransactionStatusCode;
use Webparking\LaravelCash\Exceptions\CashApiException;
use Webparking\LaravelCash\Exceptions\CashValidationException;
use Webparking\LaravelCash\Resources\DeliveryAddress as DeliveryAddressResource;
use Webparking\LaravelCash\Tests\Feature\Traits\MocksSoapCashWrapper;
use Webparking\LaravelCash\Tests\TestCase;

final class DeliveryAddressTest extends TestCase
{
    use MocksSoapCashWrapper;

    public function testEmptyIndex(): void
    {
        $wrapper = $this->createMockWrapper(function () {
            $soapClient = \Mockery::mock(\SoapClient::class)
                ->makePartial();

            $soapClient
                ->shouldReceive('SoapCall')
                ->once()
                ->andReturn(
                    $this->makeSoapResponse((string) file_get_contents(__DIR__.'/../../data/delivery-address/empty.json')),
                );

            return $soapClient;
        });

        $this->app->instance(SoapWrapper::class, $wrapper);

        /** @var DeliveryAddress $deliveryAddress */
        $deliveryAddress = $this->app->make(DeliveryAddress::class);

        $deliveryAddresses = $deliveryAddress->index();

        static::assertEmpty($deliveryAddresses);
    }

    public function testSave(): void
    {
        $wrapper = $this->createMockWrapper(function () {
            $soapClient = \Mockery::mock(\SoapClient::class)
                ->makePartial();

            $soapClient
                ->shouldReceive('SoapCall')
                ->once()
                ->andReturn(
                    $this->makeSoapResponse((string) file_get_contents(__DIR__.'/../../data/delivery-address/creation-succeeded.json')),
                );

            return $soapClient;
        });

        $this->app->instance(SoapWrapper::class, $wrapper);

        /** @var DeliveryAddress $deliveryAddress */
        $deliveryAddress = $this->app->make(DeliveryAddress::class);

        $resource = (new DeliveryAddressResource())->fill([
            'relationNumber' => '000100',
            'description' => 'This is a test delivery address.',
            'name' => 'Test B.V.',
            'attentionOf' => 'John Doe',
            'address' => 'Teststraat 12',
            'postalCodeCity' => '1234AB Test',
            'country' => 'Nederland',
            'countryCode' => 'NL',
            'phoneNumber' => '0612345678',
            'comments' => 'Dit is een test',
            'globalLocationNumber' => 'ABCDEFGHIJKLM',
        ]);

        $deliveryAddress->create($resource);
    }

    public function testSaveFailed(): void
    {
        $errorJson = (string) file_get_contents(__DIR__.'/../../data/delivery-address/creation-failed.json');

        $errorXml = simplexml_load_string(
            data_get(json_decode($errorJson, true), 'transaction.err')
        );

        $expectedException = new CashValidationException($errorXml, TransactionStatusCode::VALIDATION_ERROR);

        $this->expectExceptionObject($expectedException);

        $wrapper = $this->createMockWrapper(function () use ($errorJson) {
            $soapClient = \Mockery::mock(\SoapClient::class)
                ->makePartial();

            $soapClient
                ->shouldReceive('SoapCall')
                ->once()
                ->andReturn(
                    $this->makeSoapResponse($errorJson),
                );

            return $soapClient;
        });

        $this->app->instance(SoapWrapper::class, $wrapper);

        /** @var DeliveryAddress $deliveryAddress */
        $deliveryAddress = $this->app->make(DeliveryAddress::class);

        $resource = (new DeliveryAddressResource())->fill([
            'relationNumber' => '123456',
            'description' => 'This is a test delivery address.',
            'name' => 'Test B.V.',
            'attentionOf' => 'John Doe',
            'address' => 'Teststraat 12',
            'postalCodeCity' => '1234AB Test',
            'country' => 'Nederland',
            'countryCode' => 'NL',
            'phoneNumber' => '0612345678',
            'comments' => 'Dit is een test',
            'globalLocationNumber' => 'ABCDEFGHIJKLM',
        ]);

        $deliveryAddress->create($resource);
    }

    public function testGet(): void
    {
        $wrapper = $this->createMockWrapper(function () {
            $soapClient = \Mockery::mock(\SoapClient::class)
                ->makePartial();

            $soapClient
                ->shouldReceive('SoapCall')
                ->once()
                ->andReturn(
                    $this->makeSoapResponse((string) file_get_contents(__DIR__.'/../../data/delivery-address/get.json')),
                );

            return $soapClient;
        });

        $this->app->instance(SoapWrapper::class, $wrapper);

        /** @var DeliveryAddress $deliveryAddress */
        $deliveryAddress = $this->app->make(DeliveryAddress::class);

        $deliveryAddresses = $deliveryAddress->get('000100');

        self::assertCount(2, $deliveryAddresses);
    }
}
