<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\SalesOrderLine as SalesOrderLineResource;

class SalesOrderLine extends BaseEntity
{
    protected string $endpoint = '2410';

    protected string $resource = SalesOrderLineResource::class;

    public function get(string $identifier): ?SalesOrderLineResource
    {
        return parent::get($identifier);
    }
}
