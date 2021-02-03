<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\ItemGroupTwo as ItemGroupTwoResource;

class ItemGroupTwo extends BaseEntity
{
    protected string $endpoint = '2202';

    protected string $resource = ItemGroupTwoResource::class;

    public function get(string $identifier): ?ItemGroupTwoResource
    {
        return parent::get($identifier);
    }
}
