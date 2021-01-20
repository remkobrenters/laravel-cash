<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $articleCode      2260 Artikelcode
 * @property string $searchName       2261 Zoeknaam artikel
 * @property string $itemGroup        2208 Artikelgroep
 * @property string $itemGroup2       2202 Artikelgroep 2
 * @property string $description      2001 Omschrijving
 * @property string $supplierNumber   2230 Leveranciersnummer
 * @property string $availableStock   2293 Vrije voorraad
 * @property string $technicalStock   2273 Technische voorraad
 * @property string $grossRetailPrice 2267 Bruto verkoopprijs
 * @property string $imageName        jpg  ???
 * @property string $image            4245 Foto
 */
class Item extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'itemCode' => 'F2260',
        'searchName' => 'F2261',
        'itemGroup' => 'F2208',
        'itemGroup2' => 'F2202',
        'description' => 'F2001',
        'supplierNumber' => 'F2230',
        'availableStock' => 'F2293',
        'technicalStock' => 'F2273',
        'grossRetailPrice' => 'F2267',
        'imageName' => 'Zjpg',
        'image' => 'Z4245',
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

    public function getItemGroup2(): ?string
    {
        return $this->attributes['itemGroup2'];
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

    public function getTechnicalStock(): ?int
    {
        return (int) $this->attributes['technicalStock'];
    }

    public function getGrossRetailPrice(): ?string
    {
        return $this->attributes['grossRetailPrice'];
    }

    public function getImageName(): ?string
    {
        return $this->attributes['imageName'];
    }

    public function getImage(): ?string
    {
        return $this->attributes['image'];
    }
}
