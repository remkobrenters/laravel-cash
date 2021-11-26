<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $discountPercentage   2002 Korting%
 * @property string $employee             2205 Medewerker
 * @property string $deliveryCode         2210 Verzendcode
 * @property string $offerDescription     2211 Oms.code offerte
 * @property string $saleDescriptionCode  2212 Oms.code verkoop
 * @property string $saleDescriptionCode2 2215 Oms.code verkoop 2
 * @property string $saleDescriptionCode3 2216 Oms.code verkoop 3
 * @property string $offerDescription2    2217 Oms.code offerte 2
 * @property string $offerDescription3    2218 Oms.code offerte 3
 * @property string $customer             2220 Klantnummer
 * @property string $invoiceRelation      2227 Relatienr. factuur
 * @property string $contactPerson        2237 Contactpersoon
 * @property string $printSelection       2242 Afdrukselectie
 * @property string $paymentMethod        2332 Betaalmethode
 * @property string $amountPaid           2333 Betaald bedrag
 * @property string $orderNumber          2400 Verkoopordernummer
 * @property string $dateOfOrder          2401 Orderdatum
 * @property string $dateOfDelivery       2402 Leverdatum
 * @property string $status               2404 Status
 * @property string $description          2405 Omschrijving
 * @property string $referenceNumber      2406 Referentienummer
 * @property string $labelCount           2407 Aantal etiketten
 * @property string $description2         2408 Omschrijving 2
 * @property string $totalWeight          2409 Totaal gewicht
 * @property string $packageCount         2418 Aantal colli
 * @property string $deliveryAddress      2419 Afleveradres
 * @property string $taxCode              2422 Code btw
 * @property string $totalCount           2424 Aantal stuks
 * @property string $turnoverLedger       2901 Gbrek omzet
 * @property string $costCenter           2911 Kostenplaats
 * @property string $currencyCode         2983 Valutacode
 */
class SalesOrder extends BaseResource
{
    protected array $mapping = [
        'discountPercentage' => 'F2002',
        'employee' => 'F2205',
        'deliveryCode' => 'F2210',
        'offerDescription' => 'F2211',
        'salesDescription' => 'F2212',
        'salesDescription2' => 'F2215',
        'salesDescription3' => 'F2216',
        'offerDescription2' => 'F2217',
        'offerDescription3' => 'F2218',
        'customer' => 'F2220',
        'invoiceRelation' => 'F2227',
        'contactPerson' => 'F2237',
        'printSelection' => 'F2242',
        'paymentMethod' => 'F2332',
        'amountPaid' => 'F2333',
        'orderNumber' => 'F2400',
        'dateOfOrder' => 'F2401',
        'dateOfDelivery' => 'F2402',
        'status' => 'F2404',
        'description' => 'F2405',
        'referenceNumber' => 'F2406',
        'labelCount' => 'F2407',
        'description2' => 'F2408',
        'totalWeight' => 'F2409',
        'packageCount' => 'F2418',
        'deliveryAddress' => 'F2419',
        'taxCode' => 'F2422',
        'totalCount' => 'F2424',
        'turnoverLedger' => 'F2901',
        'costCenter' => 'F2911',
        'currencyCode' => 'F2983',
    ];

    public function getIdField(): string
    {
        return 'orderNumber';
    }

    public function getDiscountPercentage(): ?string
    {
        return $this->attributes['discountPercentage'];
    }

    public function getEmployee(): ?string
    {
        return $this->attributes['employee'];
    }

    public function getDeliveryCode(): ?string
    {
        return $this->attributes['deliveryCode'];
    }

    public function getOfferDescription(): ?string
    {
        return $this->attributes['offerDescription'];
    }

    public function getSalesDescription(): ?string
    {
        return $this->attributes['salesDescription'];
    }

    public function getSalesDescription2(): ?string
    {
        return $this->attributes['salesDescription2'];
    }

    public function getSalesDescription3(): ?string
    {
        return $this->attributes['salesDescription3'];
    }

    public function getOfferDescription2(): ?string
    {
        return $this->attributes['offerDescription2'];
    }

    public function getOfferDescription3(): ?string
    {
        return $this->attributes['offerDescription3'];
    }

    public function getCustomer(): ?string
    {
        return $this->attributes['customer'];
    }

    public function getInvoiceRelation(): ?string
    {
        return $this->attributes['invoiceRelation'];
    }

    public function getContactPerson(): ?string
    {
        return $this->attributes['contactPerson'];
    }

    public function getPrintSelection(): ?string
    {
        return $this->attributes['printSelection'];
    }

    public function getPaymentMethod(): ?string
    {
        return $this->attributes['paymentMethod'];
    }

    public function getAmountPaid(): ?string
    {
        return $this->attributes['amountPaid'];
    }

    public function getOrderNumber(): ?string
    {
        return $this->attributes['orderNumber'];
    }

    public function getDateOfOrder(): ?string
    {
        return $this->attributes['dateOfOrder'];
    }

    public function getDateOfDelivery(): ?string
    {
        return $this->attributes['dateOfDelivery'];
    }

    public function getStatus(): ?string
    {
        return $this->attributes['status'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }

    public function getReferenceNumber(): ?string
    {
        return $this->attributes['referenceNumber'];
    }

    public function getLabelCount(): ?string
    {
        return $this->attributes['labelCount'];
    }

    public function getDescription2(): ?string
    {
        return $this->attributes['description2'];
    }

    public function getTotalWeight(): ?string
    {
        return $this->attributes['totalWeight'];
    }

    public function getPackageCount(): ?string
    {
        return $this->attributes['packageCount'];
    }

    public function getDeliveryAddress(): ?string
    {
        return $this->attributes['deliveryAddress'];
    }

    public function getTaxCode(): ?string
    {
        return $this->attributes['taxCode'];
    }

    public function getTotalCount(): ?string
    {
        return $this->attributes['totalCount'];
    }

    public function getTurnoverLedger(): ?string
    {
        return $this->attributes['turnoverLedger'];
    }

    public function getCostCenter(): ?string
    {
        return $this->attributes['costCenter'];
    }

    public function getCurrencyCode(): ?string
    {
        return $this->attributes['currencyCode'];
    }
}
