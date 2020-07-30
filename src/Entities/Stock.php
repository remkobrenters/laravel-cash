<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Stock as StockResource;

class Stock extends BaseEntity
{
    protected string $endpoint = '2300';

    protected string $resource = StockResource::class;

    protected function get(string $identifier): ?StockResource
    {
        return parent::get($identifier);
    }
}
