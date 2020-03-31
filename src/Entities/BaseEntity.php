<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Illuminate\Support\Collection;
use Webparking\LaravelCash\Client;
use Webparking\LaravelCash\Enums\DataType;

abstract class BaseEntity
{
    protected Client $client;

    protected string $endpoint;

    protected string $resource;

    private \SimpleXMLElement $lastRawDataSet;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index(): Collection
    {
        $rawData = $this->call(DataType::EXPORT(), $this->endpoint);

        return $this->map($rawData);
    }

    protected function get(string $identifier)
    {
        $rawData = $this->call(DataType::EXPORT(), $this->endpoint, $identifier);
        if (1 !== $rawData->count()) {
            return null;
        }

        return new $this->resource($rawData->{'R' . $this->endpoint});
    }

    protected function map(\SimpleXMLElement $xml): Collection
    {
        $collection = new Collection();

        foreach ($xml as $element) {
            $collection->add(new $this->resource($element));
        }

        return $collection;
    }

    protected function call(DataType $dataType, string $endpoint, string $identifier = null): \SimpleXMLElement
    {
        $response = $this->client->getSoapWrapper()->call(
            $this->client->makeMethod($dataType),
            $this->client->makeParameters($dataType, $endpoint, $identifier)
        );

        if (!isset($response['response']) || !isset($response['exportResult'])) {
            throw new \RuntimeException(sprintf('Call failed, no response received'));
        }

        if (1 !== $response['response']->code) {
            throw new \RuntimeException(sprintf('Call failed, response code %s received', $response['response']->code));
        }

        $this->lastRawDataSet = $this->client->parseResponse($response['exportResult']);

        return $this->lastRawDataSet;
    }

    public function getLastRawDataSet(): ?\SimpleXMLElement
    {
        return $this->lastRawDataSet;
    }
}
