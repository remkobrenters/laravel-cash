<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\DeliveryAddress as DeliveryAddressResource;

class DeliveryAddress extends BaseEntity
{
    protected string $endpoint = '2229';

    protected string $resource = DeliveryAddressResource::class;

    public function get(string $identifier): ?DeliveryAddressResource
    {
        return parent::get($identifier);
    }
}
