<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

/**
 * @property string $contractNumber            4200 Contractnummer
 * @property string $contractType              4100 Contractsoort
 * @property string $itemCode                  2260 Artikelcode
 * @property string $serialNumber              2622 Serienummer
 * @property string $customerNumber            2220 Klantnummer
 * @property string $deviceCount               4201 Aantal apparaten
 * @property string $maintenancePeriodInMonths 2351 Onderh.termijn (mnd)
 * @property string $billingPeriodInMonths     4252 Fact. termijn (mnd)
 * @property string $installationDate          4203 Datum installatie
 * @property string $contractStartDate         4205 Datum contract
 * @property string $warrantyEndDate           4204 Afloopdatum garantie
 * @property string $nextBillingDate           4208 Factuurdatum volgend
 * @property string $nextMaintenanceDate       2353 Onderh.datum volgend
 * @property string $lastMalfunctionDate       4207 Storingsdat. laatste
 * @property string $blocked                   2280 Geblokkeerd
 * @property string $conditionOne              4231 Voorwaarden 1
 * @property string $sellingPrice              2267 Verkoopprijs
 * @property string $contractEndDate           4206 Datum beëindigd cntr
 * @property string $warrantyPeriodInMonths    4202 Garantietermijn (mnd)
 * @property string $lastMaintenanceDate       2352 Onderh.datum laatste
 * @property string $contactNumber             2237 Contactpersoon
 */
class Contract extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'contractNumber' => 'F4200',
        'contractType' => 'F4100',
        'itemCode' => 'F2260',
        'serialNumber' => 'F2622',
        'customerNumber' => 'F2220',
        'deviceCount' => 'F4201',
        'maintenancePeriodInMonths' => 'F2351',
        'billingPeriodInMonths' => 'F4252',
        'installationDate' => 'F4203',
        'contractStartDate' => 'F4205',
        'warrantyEndDate' => 'F4204',
        'nextBillingDate' => 'F4208',
        'nextMaintenanceDate' => 'F2353',
        'lastMalfunctionDate' => 'F4207',
        'blocked' => 'F2280',
        'conditionOne' => 'F4231',
        'sellingPrice' => 'F2267',
        'contractEndDate' => 'F4206',
        'warrantyPeriodInMonths' => 'F4202',
        'lastMaintenanceDate' => 'F2352',
        'contactNumber' => 'F2237',
    ];

    public function getIdField(): string
    {
        return 'contractNumber';
    }

    public function getContractNumber(): ?string
    {
        return $this->attributes['contractNumber'];
    }

    public function getContractType(): ?string
    {
        return $this->attributes['contractType'];
    }

    public function getItemCode(): ?string
    {
        return $this->attributes['itemCode'];
    }

    public function getSerialNumber(): ?string
    {
        return $this->attributes['serialNumber'];
    }

    public function getCustomerNumber(): ?string
    {
        return $this->attributes['customerNumber'];
    }

    public function getDeviceCount(): ?string
    {
        return $this->attributes['deviceCount'];
    }

    public function getMaintenancePeriodInMonths(): ?string
    {
        return $this->attributes['maintenancePeriodInMonths'];
    }

    public function getBillingPeriodInMonths(): ?string
    {
        return $this->attributes['billingPeriodInMonths'];
    }

    public function getInstallationDate(): ?CarbonInterface
    {
        return $this->attributes['installationDate']
            ? CarbonImmutable::parse($this->attributes['installationDate'])
            : null;
    }

    public function getContractStartDate(): ?CarbonInterface
    {
        return $this->attributes['contractStartDate']
            ? CarbonImmutable::parse($this->attributes['contractStartDate'])
            : null;
    }

    public function getWarrantyEndDate(): ?CarbonInterface
    {
        return $this->attributes['warrantyEndDate']
            ? CarbonImmutable::parse($this->attributes['warrantyEndDate'])
            : null;
    }

    public function getNextBillingDate(): ?CarbonInterface
    {
        return $this->attributes['nextBillingDate']
            ? CarbonImmutable::parse($this->attributes['nextBillingDate'])
            : null;
    }

    public function getNextMaintenanceDate(): ?CarbonInterface
    {
        return $this->attributes['nextMaintenanceDate']
            ? CarbonImmutable::parse($this->attributes['nextMaintenanceDate'])
            : null;
    }

    public function getLastMalfunctionDate(): ?CarbonInterface
    {
        return $this->attributes['lastMalfunctionDate']
            ? CarbonImmutable::parse($this->attributes['lastMalfunctionDate'])
            : null;
    }

    public function getBlocked(): ?string
    {
        return $this->attributes['blocked'];
    }

    public function getConditionOne(): ?string
    {
        return $this->attributes['conditionOne'];
    }

    public function getSellingPrice(): ?string
    {
        return $this->attributes['sellingPrice'];
    }

    public function getContractEndDate(): ?CarbonInterface
    {
        return $this->attributes['contractEndDate']
            ? CarbonImmutable::parse($this->attributes['contractEndDate'])
            : null;
    }

    public function getWarrantyPeriodInMonths(): ?string
    {
        return $this->attributes['warrantyPeriodInMonths'];
    }

    public function getLastMaintenanceDate(): ?CarbonInterface
    {
        return $this->attributes['lastMaintenanceDate']
            ? CarbonImmutable::parse($this->attributes['lastMaintenanceDate'])
            : null;
    }

    public function getContactNumber(): ?string
    {
        return $this->attributes['contactNumber'];
    }
}
