<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Contact as ContactResource;

class Contact extends BaseEntity
{
    protected string $endpoint = '0105';

    protected string $resource = ContactResource::class;

    public function get(string $identifier): ?ContactResource
    {
        return parent::get($identifier);
    }
}
