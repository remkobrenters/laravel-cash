<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Warehouse as WarehouseResource;

class Warehouse extends BaseEntity
{
    protected string $endpoint = '2209';

    protected string $resource = WarehouseResource::class;

    public function get(string $identifier): ?WarehouseResource
    {
        return parent::get($identifier);
    }
}
