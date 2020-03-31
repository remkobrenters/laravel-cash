<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $articleCode    2260 Artikelcode
 * @property string $searchName     2261 Zoeknaam artikel
 * @property string $articleGroup   2208 Artikelgroep
 * @property string $description    2001 Omschrijving
 * @property string $supplierNumber 2230 Leveranciersnummer
 * @property string $availableStock 2293 Vrije voorraad
 */
class Item extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'itemCode' => '2260',
        'searchName' => '2261',
        'itemGroup' => '2208',
        'description' => '2001',
        'supplierNumber' => '2230',
        'availableStock' => '2293',
    ];

    public function getIdField(): string
    {
        return 'itemCode';
    }

    public function getItemCode(): ?string
    {
        return $this->attributes['itemCode'];
    }

    public function getSearchName(): ?string
    {
        return $this->attributes['searchName'];
    }

    public function getItemGroup(): ?string
    {
        return $this->attributes['itemGroup'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }

    public function getSupplierNumber(): ?string
    {
        return $this->attributes['supplierNumber'];
    }

    public function getAvailableStock(): ?int
    {
        return (int) $this->attributes['availableStock'];
    }
}
