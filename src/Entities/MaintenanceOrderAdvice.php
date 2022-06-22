<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Entities;

use Webparking\LaravelCash\Resources\MaintenanceOrderAdvice as MaintenanceOrderAdviceResource;

class MaintenanceOrderAdvice extends BaseEntity
{
    protected string $endpoint = '2550';

    protected string $resource = MaintenanceOrderAdviceResource::class;

    public function get(string $identifier): ?MaintenanceOrderAdviceResource
    {
        return parent::get($identifier);
    }
}
