<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Customer as CustomerResource;

class Customer extends BaseEntity
{
    protected string $endpoint = '0101';

    protected string $resource = CustomerResource::class;

    public function get(string $identifier): ?CustomerResource
    {
        return parent::get($identifier);
    }
}
