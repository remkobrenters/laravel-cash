<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\CustomerGroup as CustomerGroupResource;

class CustomerGroup extends BaseEntity
{
    protected string $endpoint = '2203';

    protected string $resource = CustomerGroupResource::class;

    public function get(string $identifier): ?CustomerGroupResource
    {
        return parent::get($identifier);
    }
}
