<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\CustomerGroupTwo as CustomerGroupTwoResource;

class CustomerGroupTwo extends BaseEntity
{
    protected string $endpoint = '2206';

    protected string $resource = CustomerGroupTwoResource::class;

    public function get(string $identifier): ?CustomerGroupTwoResource
    {
        return parent::get($identifier);
    }
}
