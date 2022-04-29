<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Supplier as SupplierResource;

class Supplier extends BaseEntity
{
    protected string $endpoint = '2230';

    protected string $resource = SupplierResource::class;

    public function get(string $identifier): ?SupplierResource
    {
        return parent::get($identifier);
    }
}
