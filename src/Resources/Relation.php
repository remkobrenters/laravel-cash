<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $relationNumber 0101 Relatienummer
 * @property string $searchName     0102 Zoeknaam
 * @property string $name           0102 Naam
 * @property string $address        0105 Adres
 * @property string $postalCode     0438 Postcode
 * @property string $city           1837 Woonplaats
 */
class Relation extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
        'searchName' => 'F0102',
        'name' => 'F0103',
        'address' => 'F0105',
        'postal_code' => 'F0438',
        'city' => 'F1837',
    ];

    public function getIdField(): string
    {
        return 'relationNumber';
    }

    public function getSearchName(): ?string
    {
        return $this->attributes['searchName'];
    }

    public function getName(): ?string
    {
        return $this->attributes['name'];
    }

    public function getAddress(): ?string
    {
        return $this->attributes['address'];
    }

    public function getPostalCode(): ?string
    {
        return $this->attributes['postal_code'];
    }

    public function getCity(): ?string
    {
        return $this->attributes['city'];
    }
}
