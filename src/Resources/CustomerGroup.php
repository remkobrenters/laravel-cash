<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $customerGroup 2203 Klantgroep
 * @property string $description   2001 Omschrijving
 */
class CustomerGroup extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'description' => '2001',
        'customerGroup' => '2203',
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
