<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\Project as ProjectResource;

class Project extends BaseEntity
{
    protected string $endpoint = '3600';

    protected string $resource = ProjectResource::class;

    public function get(string $identifier): ?ProjectResource
    {
        return parent::get($identifier);
    }
}
