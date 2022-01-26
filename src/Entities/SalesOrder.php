<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\SalesOrder as SalesOrderResource;

class SalesOrder extends BaseEntity
{
    protected string $endpoint = '2400';

    protected string $resource = SalesOrderResource::class;

    public function get(string $identifier): ?SalesOrderResource
    {
        return parent::get($identifier);
    }
}
