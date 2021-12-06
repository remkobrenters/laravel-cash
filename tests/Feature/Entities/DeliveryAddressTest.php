<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Tests\Feature\Entities;

use Artisaninweb\SoapWrapper\Service;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Webparking\LaravelCash\Entities\DeliveryAddress;
use Webparking\LaravelCash\Tests\TestCase;

final class DeliveryAddressTest extends TestCase
{
    public function testEmptyIndex(): void
    {
        /** @var SoapWrapper $wrapper */
        $wrapper = $this->app->make(SoapWrapper::class);

        $wrapper->add('Cash', function (Service $service) {
            $soapClient = \Mockery::mock(\SoapClient::class)
                ->makePartial();

            $soapClient
                ->shouldReceive('SoapCall')
                ->once()
                ->andReturn(
                    $this->makeSoapResponse((string) file_get_contents(__DIR__.'/../../data/delivery-address/empty.json')),
                );

            $service->client($soapClient);
        });

        $this->app->instance(SoapWrapper::class, $wrapper);

        /** @var DeliveryAddress $deliveryAddress */
        $deliveryAddress = $this->app->make(DeliveryAddress::class);

        $deliveryAddresses = $deliveryAddress->index();

        static::assertEmpty($deliveryAddresses);
    }

    /**
     * @param string $output
     * @return mixed[]
     * @throws \JsonException
     */
    private function makeSoapResponse(string $output): array
    {
        $data = json_decode($output, true, 512, JSON_THROW_ON_ERROR);

        $data['response'] = (object) $data['response'];

        return $data;
    }
}
