<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $relationNumber         0101 Relatienummer
 * @property string $abcDelivery            0440 ABC-levering
 * @property string $notes                  2004 Opmerking
 * @property string $gAccount               2167 G-rekening
 * @property string $priceList              2200 Code prijslijst
 * @property string $customerGroup          2203 Klantgroep
 * @property string $rayon                  2204 Rayon
 * @property string $employee               2205 Medewerker
 * @property string $customerGroupTwo       2206 Klantgroep 2
 * @property string $salesText              2212 Code verkooptekst
 * @property string $salesTextTwo           2215 Code verkooptekst 2
 * @property string $invoiceCount           2222 Aantal facturen
 * @property string $orderConfirmationCount 2223 Aantal orderbevestiging
 * @property string $packageReceiptCount    2224 Aantal pakbonnen
 * @property string $billing                2225 Code facturering
 * @property string $blocked                2226 Geblokkeerd
 * @property string $invoiceRelation        2227 Relatienummer factuur
 * @property string $warehouseCount         2245 Aantal magazijnbonen
 * @property string $salesTax               2422 Code OB
 * @property string $planningLevel          3215 Planningsniveau
 */
class Customer extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
        'abcDelivery' => 'F0440',
        'notes' => 'F2004',
        'gAccount' => 'F2167',
        'priceList' => 'F2200',
        'customerGroup' => 'F2203',
        'rayon' => 'F2204',
        'employee' => 'F2205',
        'customerGroupTwo' => 'F2206',
        'salesText' => 'F2212',
        'salesTextTwo' => 'F2215',
        'invoiceCount' => 'F2222',
        'orderConfirmationCount' => 'F2223',
        'packageReceiptCount' => 'F2224',
        'billing' => 'F2225',
        'blocked' => 'F2226',
        'invoiceRelation' => 'F2227',
        'warehouseCount' => 'F2245',
        'salesTax' => 'F2422',
        'planningLevel' => 'F3215',
    ];

    public function getIdField(): string
    {
        return 'relationNumber';
    }

    public function getRelationNumber(): ?string
    {
        return $this->attributes['relationNumber'];
    }

    public function getAbcDelivery(): ?string
    {
        return $this->attributes['abcDelivery'];
    }

    public function getNotes(): ?string
    {
        return $this->attributes['notes'];
    }

    public function getGAccount(): ?string
    {
        return $this->attributes['gAccount'];
    }

    public function getPriceList(): ?string
    {
        return $this->attributes['priceList'];
    }

    public function getCustomerGroup(): ?string
    {
        return $this->attributes['customerGroup'];
    }

    public function getRayon(): ?string
    {
        return $this->attributes['rayon'];
    }

    public function getEmployee(): ?string
    {
        return $this->attributes['employee'];
    }

    public function getCustomerGroupTwo(): ?string
    {
        return $this->attributes['customerGroupTwo'];
    }

    public function getSalesText(): ?string
    {
        return $this->attributes['salesText'];
    }

    public function getSalesTextTwo(): ?string
    {
        return $this->attributes['salesTextTwo'];
    }

    public function getInvoiceCount(): ?string
    {
        return $this->attributes['invoiceCount'];
    }

    public function getOrderConfirmationCount(): ?string
    {
        return $this->attributes['orderConfirmationCount'];
    }

    public function getPackageReceiptCount(): ?string
    {
        return $this->attributes['packageReceiptCount'];
    }

    public function getBilling(): ?string
    {
        return $this->attributes['billing'];
    }

    public function getBlocked(): ?string
    {
        return $this->attributes['blocked'];
    }

    public function getInvoiceRelation(): ?string
    {
        return $this->attributes['invoiceRelation'];
    }

    public function getWarehouseCount(): ?string
    {
        return $this->attributes['warehouseCount'];
    }

    public function getSalesTax(): ?string
    {
        return $this->attributes['salesTax'];
    }

    public function getPlanningLevel(): ?string
    {
        return $this->attributes['planningLevel'];
    }
}
