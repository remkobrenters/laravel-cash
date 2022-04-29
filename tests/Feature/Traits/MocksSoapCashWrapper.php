<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Tests\Feature\Traits;

use Artisaninweb\SoapWrapper\Service;
use Artisaninweb\SoapWrapper\SoapWrapper;

trait MocksSoapCashWrapper
{
    protected function createMockWrapper(callable $makeSoapClientMock): SoapWrapper
    {
        /** @var SoapWrapper $wrapper */
        $wrapper = $this->app->make(SoapWrapper::class);

        $wrapper->add('Cash', function (Service $service) use ($makeSoapClientMock): void {
            /** @var \SoapClient $soapClient */
            $soapClient = $makeSoapClientMock();

            $service->client($soapClient);
        });

        return $wrapper;
    }

    /**
     * @throws \JsonException
     *
     * @return mixed[]
     */
    protected function makeSoapResponse(string $output): array
    {
        $data = json_decode($output, true, 512, JSON_THROW_ON_ERROR);

        $data['response'] = (object) $data['response'];

        return $data;
    }
}
