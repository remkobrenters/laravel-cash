<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\ProjectItem as ProjectItemResource;

class ProjectItem extends BaseEntity
{
    protected string $endpoint = '3620';

    protected string $resource = ProjectItemResource::class;

    public function get(string $identifier): ?ProjectItemResource
    {
        return parent::get($identifier);
    }
}
