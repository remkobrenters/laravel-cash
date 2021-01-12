<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Employee as EmployeeResource;

class Employee extends BaseEntity
{
    protected string $endpoint = '2205';

    protected string $resource = EmployeeResource::class;

    public function get(string $identifier): ?EmployeeResource
    {
        return parent::get($identifier);
    }
}
