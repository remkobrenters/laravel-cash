<?php

declare(strict_types=1);

namespace Webparking\LaravelCash;

use Artisaninweb\SoapWrapper\Service;
use Artisaninweb\SoapWrapper\SoapWrapper;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Webparking\LaravelCash\Enums\DataType;
use Webparking\LaravelCash\Exceptions\CashResponseFormatException;

class Client
{
    private SoapWrapper $soapWrapper;

    public function __construct()
    {
        $this->soapWrapper = new SoapWrapper();
        if (!$this->soapWrapper->has('Cash')) {
            $this->soapWrapper->add('Cash', function (Service $service): void {
                $service->wsdl(Config::get('cash.wsdl'));
            });
        }
    }

    public function getSoapWrapper(): SoapWrapper
    {
        return $this->soapWrapper;
    }

    public function makeMethod(DataType $dataType): string
    {
        $value = $dataType->getValue();
        if (Str::startsWith($value, 'Cash.')) {
            return $value;
        }

        return 'Cash.'.$value;
    }

    public function makeParameters(
        DataType $dataType,
        string $endpoint,
        string $identifier = null,
        array $attributes = []
    ): array {
        if ($dataType->equals(DataType::EXPORT())) {
            $endpointValue = $endpoint;
            if ($identifier) {
                $endpointValue .= '|'.$identifier;
            }
        } elseif ($dataType->equals(DataType::IMPORT())) {
            $xml = new \SimpleXMLElement('<CASH></CASH>');
            $child = $xml->addChild($endpoint);
            foreach ($attributes as $key => $value) {
                $child->addChild($key, (string) $value);
            }

            $dom = dom_import_simplexml($xml);
            $importData = $dom->ownerDocument->saveXML($dom->ownerDocument->documentElement);
            $endpointValue = $importData;
        } else {
            throw new \RuntimeException('Invalid dataType provided');
        }

        return [
            'token' => '',
            'relatie' => Config::get('cash.relation'),
            'email' => Config::get('cash.email'),
            'pass' => Config::get('cash.password'),
            $dataType->getValue() => $endpointValue,
            'administration' => [
                'admCode' => Config::get('cash.administration.code'),
                'admMap' => Config::get('cash.administration.map'),
            ],
            'formaat' => '0',
        ];
    }

    public function parseResponse(string $response): \SimpleXMLElement
    {
        try {
            $cleanResponse = str_replace('Content-type: text/xml ', '', $response);

            return simplexml_load_string($cleanResponse);
        } catch (\Exception $exception) {
            throw new CashResponseFormatException('Could not parse response xml. No valid xml found', $response);
        }
    }
}
