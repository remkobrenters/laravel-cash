<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property ?string $relationNumber
 * @property ?string $deliveryAddressSerialNumber
 * @property ?string $description
 * @property ?string $name
 * @property ?string $attentionOf
 * @property ?string $address
 * @property ?string $postalCodeCity
 * @property ?string $country
 * @property ?string $countryCode
 * @property ?string $phoneNumber
 * @property ?string $comments
 * @property ?string $globalLocationNumber
 */
class DeliveryAddress extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
        'deliveryAddressSerialNumber' => 'F2228',
        'description' => 'F2229',
        'name' => 'F0103',
        'attentionOf' => 'F0104',
        'address' => 'F0105',
        'postalCodeCity' => 'F0107',
        'country' => 'F0125',
        'countryCode' => 'F0130',
        'phoneNumber' => 'F0108',
        'comments' => 'F0115',
        'globalLocationNumber' => 'F2888',
    ];

    public function getIdField(): string
    {
        return 'relationNumber';
    }

    public function getRelationNumber(): ?string
    {
        return $this->attributes['relationNumber'];
    }

    public function getDeliveryAddressSerialNumber(): ?string
    {
        return $this->attributes['deliveryAddressSerialNumber'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }

    public function getName(): ?string
    {
        return $this->attributes['name'];
    }

    public function getAttentionOf(): ?string
    {
        return $this->attributes['attentionOf'];
    }

    public function getAddress(): ?string
    {
        return $this->attributes['address'];
    }

    public function getPostalCodeCity(): ?string
    {
        return $this->attributes['postalCodeCity'];
    }

    public function getCountry(): ?string
    {
        return $this->attributes['country'];
    }

    public function getCountryCode(): ?string
    {
        return $this->attributes['countryCode'];
    }

    public function getPhoneNumber(): ?string
    {
        return $this->attributes['phoneNumber'];
    }

    public function getComments(): ?string
    {
        return $this->attributes['comments'];
    }

    public function getGlobalLocationNumber(): ?string
    {
        return $this->attributes['globalLocationNumber'];
    }
}
