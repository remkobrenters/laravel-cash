<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Illuminate\Support\Collection;
use Webparking\LaravelCash\Enums\DataType;
use Webparking\LaravelCash\Resources\DeliveryAddress as DeliveryAddressResource;

class DeliveryAddress extends BaseEntity
{
    protected string $endpoint = '2229';

    protected string $resource = DeliveryAddressResource::class;

    /**
     * @return null|Collection<DeliveryAddressResource>
     */
    public function get(string $identifier): ?Collection
    {
        $rawData = $this->call(DataType::EXPORT(), $this->endpoint, $identifier);

        if (null === $rawData || 0 === $rawData->count()) {
            return null;
        }

        return $this->mapIntoResource($rawData);
    }

    /** @return Collection<DeliveryAddressResource> */
    private function mapIntoResource(\SimpleXMLElement $resourceCollection): Collection
    {
        $resources = [];

        foreach ($resourceCollection->R2229 as $resource) {
            $resources[] = new DeliveryAddressResource($resource);
        }

        return collect($resources);
    }
}
