<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

use Carbon\Carbon;

/**
 * @property string $customerNumber    2220 Klantnummer
 * @property string $itemCode          2260 Artikelcode
 * @property string $serialNumber      2622 Serienummer
 * @property string $contractType      4100 Contractsoort
 * @property string $contractNumber    4200 Contractnummer
 * @property string $installationDate  4203 Datum installatie
 * @property string $contractStartDate 4205 Datum contract
 * @property string $contractEndDate   4206 Datum beeindigd contract
 * @property string $warrantyEndDate   4204 Afloopdatum garantie
 * @property string $warehouseLocation 2287 Magazijnlocatie
 * @property string $conditionOne      4231 Voorwaarde1
 */
class Contract extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'customerNumber' => '2220',
        'itemCode' => '2260',
        'serialNumber' => '2622',
        'contractType' => '4100',
        'contractNumber' => '4200',
        'installationDate' => '4203',
        'contractStartDate' => '4205',
        'contractEndDate' => '4206',
        'warrantyEndDate' => '4204',
        'conditionOne' => '4231',
    ];

    public function getIdField(): string
    {
        return 'contractNumber';
    }

    public function getContractNumber(): ?string
    {
        return $this->attributes['contractNumber'];
    }

    public function getCustomerNumber(): ?string
    {
        return $this->attributes['customerNumber'];
    }

    public function getItemCode(): ?string
    {
        return $this->attributes['itemCode'];
    }

    public function getSerialNumber(): ?string
    {
        return $this->attributes['serialNumber'];
    }

    public function getContractType(): ?string
    {
        return $this->attributes['contractType'];
    }

    public function getInstallationDate(): ?Carbon
    {
        if (!$this->attributes['installationDate']) {
            return null;
        }

        return Carbon::parse($this->attributes['installationDate']);
    }

    public function getContractStartDate(): ?Carbon
    {
        if (!$this->attributes['contractStartDate']) {
            return null;
        }

        return Carbon::parse($this->attributes['contractStartDate']);
    }

    public function getContractEndDate(): ?Carbon
    {
        if (!$this->attributes['contractEndDate']) {
            return null;
        }

        return Carbon::parse($this->attributes['contractEndDate']);
    }

    public function getWarrantyEndDate(): ?Carbon
    {
        if (!$this->attributes['warrantyEndDate']) {
            return null;
        }

        return Carbon::parse($this->attributes['warrantyEndDate']);
    }

    public function getConditionOne(): ?string
    {
        return $this->attributes['conditionOne'];
    }
}
