<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\ItemGroup as ItemGroupResource;

class ItemGroup extends BaseEntity
{
    protected string $endpoint = '2208';

    protected string $resource = ItemGroupResource::class;

    public function get(string $identifier): ?ItemGroupResource
    {
        return parent::get($identifier);
    }
}
