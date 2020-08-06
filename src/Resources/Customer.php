<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $relationNumber   0101 Relatienummer
 * @property string $customerGroup    2203 Klantgroep
 * @property string $customerGroupTwo 2206 Klantgroep 2
 */
class Customer extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
        'customerGroup' => 'F2203',
        'customerGroupTwo' => 'F2206',
    ];

    public function getIdField(): string
    {
        return 'relationNumber';
    }

    public function getCustomerGroup(): ?string
    {
        return $this->attributes['customerGroup'];
    }

    public function getCustomerGroupTwo(): ?string
    {
        return $this->attributes['customerGroupTwo'];
    }
}
