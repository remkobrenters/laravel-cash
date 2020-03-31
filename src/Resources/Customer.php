<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $customerNumber 0101 Klantnummer
 * @property string $searchName     0102 Zoeknaam
 * @property string $name           0102 Naam
 */
class Customer extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'customerNumber' => '0101',
        'searchName' => '0102',
        'name' => '0103',
    ];

    public function getIdField(): string
    {
        return 'customerNumber';
    }

    public function getSearchName(): ?string
    {
        return $this->attributes['searchName'];
    }

    public function getName(): ?string
    {
        return $this->attributes['name'];
    }
}
