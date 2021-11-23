<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\ItemMemo as ItemMemoResource;

class ItemMemo extends BaseEntity
{
    protected string $endpoint = '2269';

    protected string $resource = ItemMemoResource::class;

    public function get(string $identifier): ?ItemMemoResource
    {
        return parent::get($identifier);
    }
}
