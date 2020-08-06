<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $customerGroup 2206 Klantgroep 2
 * @property string $description   2001 Omschrijving
 */
class CustomerGroupTwo extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'description' => 'F2001',
        'customerGroup' => 'F2206',
    ];

    public function getIdField(): string
    {
        return 'customerGroup';
    }

    public function getCustomerGroup(): ?string
    {
        return $this->attributes['customerGroup'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }
}
