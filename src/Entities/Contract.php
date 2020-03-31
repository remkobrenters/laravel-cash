<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Contract as ContractResource;

class Contract extends BaseEntity
{
    protected string $endpoint = '4200';

    protected string $resource = ContractResource::class;

    public function get(string $identifier): ?ContractResource
    {
        return parent::get($identifier);
    }
}
