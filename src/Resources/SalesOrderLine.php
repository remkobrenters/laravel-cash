<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $discountPercentage        2002 Korting%
 * @property string $warehouse                 2209 Magazijn
 * @property string $item                      2260 Artikelcode
 * @property string $salesPrice                2267 Verkoopprijs
 * @property string $salesOrder                2400 Verkoopordernummer
 * @property string $dateOfDelivery            2402 Leverdatum
 * @property string $amountOrdered             2410 Aantal besteld
 * @property string $foreignCurrencySalesPrice 2417 Verkoopprijs vr.val.
 * @property string $index                     2426 Volgnummer
 * @property string $length                    2437 Lengte
 * @property string $factor                    2438 Factor
 * @property string $surface                   2459 Oppervlakte
 * @property string $serialNumber              2622 Serienummer
 */
class SalesOrderLine extends BaseResource
{
    protected array $mapping = [
        'discountPercentage' => 'F2002',
        'warehouse' => 'F2209',
        'item' => 'F2260',
        'salesPrice' => 'F2267',
        'salesOrder' => 'F2400',
        'dateOfDelivery' => 'F2402',
        'amountOrdered' => 'F2410',
        'foreignCurrencySalesPrice' => 'F2417',
        'index' => 'F2426',
        'length' => 'F2437',
        'factor' => 'F2438',
        'surface' => 'F2459',
        'serialNumber' => 'F2622',
    ];

    public function getIdField(): string
    {
        return 'orderNumber';
    }

    public function getDiscountPercentage(): ?string
    {
        return $this->attributes['discountPercentage'];
    }

    public function getWarehouse(): ?string
    {
        return $this->attributes['warehouse'];
    }

    public function getItem(): ?string
    {
        return $this->attributes['item'];
    }

    public function getSalesPrice(): ?string
    {
        return $this->attributes['salesPrice'];
    }

    public function getSalesOrder(): ?string
    {
        return $this->attributes['salesOrder'];
    }

    public function getDateOfDelivery(): ?string
    {
        return $this->attributes['dateOfDelivery'];
    }

    public function getAmountOrdered(): ?string
    {
        return $this->attributes['amountOrdered'];
    }

    public function getForeignCurrencySalesPrice(): ?string
    {
        return $this->attributes['foreignCurrencySalesPrice'];
    }

    public function getIndex(): ?string
    {
        return $this->attributes['index'];
    }

    public function getLength(): ?string
    {
        return $this->attributes['length'];
    }

    public function getFactor(): ?string
    {
        return $this->attributes['factor'];
    }

    public function getSurface(): ?string
    {
        return $this->attributes['surface'];
    }

    public function getSerialNumber(): ?string
    {
        return $this->attributes['serialNumber'];
    }
}
