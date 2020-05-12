<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Relation as RelationResource;

class Relation extends BaseEntity
{
    protected string $endpoint = '0101';

    protected string $resource = RelationResource::class;

    public function get(string $identifier): ?RelationResource
    {
        return parent::get($identifier);
    }
}
