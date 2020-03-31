<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Item as ItemResource;

class Item extends BaseEntity
{
    protected string $endpoint = '2260';

    protected string $resource = ItemResource::class;

    public function get(string $identifier): ?ItemResource
    {
        return parent::get($identifier);
    }
}
