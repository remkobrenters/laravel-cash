<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\ContractType as ContractTypeResource;

class ContractType extends BaseEntity
{
    protected string $endpoint = '4100';

    protected string $resource = ContractTypeResource::class;

    public function get(string $identifier): ?ContractTypeResource
    {
        return parent::get($identifier);
    }
}
