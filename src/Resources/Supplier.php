<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property ?string $relationNumber 0101 Relatienr
 */
class Supplier extends BaseResource
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
    ];

    public function getIdField(): string
    {
        return 'relationNumber';
    }

    public function getRelationNumber(): ?string
    {
        return $this->attributes['relationNumber'];
    }
}
