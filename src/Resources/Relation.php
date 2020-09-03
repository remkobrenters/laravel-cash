<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $relationNumber    F0101 Relatienummer
 * @property string $searchName        F0102 Zoeknaam
 * @property string $name              F0103 Naam
 * @property string $address           F0105 Adres
 * @property string $phoneNumber       F0108 Telefoonnummer
 * @property string $iban              F0110 IBAN
 * @property string $email             F0120 E-mailadres
 * @property string $countryCode       F0130 Code land
 * @property string $bicCode           F0350 BIC-code
 * @property string $postalCode        F0438 Postcode
 * @property string $mobilePhoneNumber F1197 Mobiel nummer
 * @property string $cocNumber         F1479 KvK-nummer
 * @property string $firstName         F1829 Voornaam / Voorletters
 * @property string $lastName          F1831 Achternaam
 * @property string $streetName        F1833 Straat
 * @property string $addressNumber     F1834 Huisnummer
 * @property string $city              F1837 Woonplaats
 */
class Relation extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
        'searchName' => 'F0102',
        'name' => 'F0103',
        'address' => 'F0105',
        'phoneNumber' => 'F0108',
        'iban' => 'F0110',
        'email' => 'F0120',
        'countryCode' => 'F0130',
        'bicCode' => 'F0350',
        'postalCode' => 'F0438',
        'mobilePhoneNumber' => 'F1197',
        'cocNumber' => 'F1479',
        'firstName' => 'F1829',
        'lastName' => 'F1831',
        'streetName' => 'F1833',
        'addressNumber' => 'F1834',
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

    public function getPhoneNumber(): ?string
    {
        return $this->attributes['phoneNumber'];
    }

    public function getIban(): ?string
    {
        return $this->attributes['iban'];
    }

    public function getEmail(): ?string
    {
        return $this->attributes['email'];
    }

    public function getCountryCode(): ?string
    {
        return $this->attributes['countryCode'];
    }

    public function getBicCode(): ?string
    {
        return $this->attributes['bicCode'];
    }

    public function getPostalCode(): ?string
    {
        return $this->attributes['postalCode'];
    }

    public function getMobilePhoneNumber(): ?string
    {
        return $this->attributes['mobilePhoneNumber'];
    }

    public function getCocNumber(): ?string
    {
        return $this->attributes['cocNumber'];
    }

    public function getFirstName(): ?string
    {
        return $this->attributes['firstName'];
    }

    public function getLastName(): ?string
    {
        return $this->attributes['lastName'];
    }

    public function getStreetName(): ?string
    {
        return $this->attributes['streetName'];
    }

    public function getAddressNumber(): ?string
    {
        return $this->attributes['addressNumber'];
    }

    public function getCity(): ?string
    {
        return $this->attributes['city'];
    }
}
