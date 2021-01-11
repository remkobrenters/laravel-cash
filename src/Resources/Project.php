<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

use Carbon\Carbon;

/**
 * @property string $project          3600 Dossier
 * @property string $contractNumber   4200 Contractnummer
 * @property string $relationNumber   0101 Relatienummer
 * @property string $employee         2205 Medewerker
 * @property string $warehouseCode    2209 Magazijncode
 * @property string $productCode      3400 Productcode
 * @property string $dateOfExecution  3501 Uitvoerdatum
 * @property string $dateOfCreation   3601 Aanmaakdatum
 * @property string $productReference 3612 Productreferentie
 * @property string $description      3614 Description
 * @property string $location         3615 Locatie
 * @property string $receiptCode      4304 Boncode
 */
class Project extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'project' => 'F3600',
        'contractNumber' => 'F4200',
        'relationNumber' => 'F0101',
        'employee' => 'F2205',
        'warehouseCode' => 'F2209',
        'productCode' => 'F3400',
        'dateOfExecution' => 'F3501',
        'dateOfCreation' => 'F3601',
        'productReference' => 'F3612',
        'description' => 'F3614',
        'location' => 'F3615',
        'receiptCode' => 'F4304',
    ];

    public function getIdField(): string
    {
        return 'project';
    }

    public function getContractNumber(): ?string
    {
        return $this->attributes['contractNumber'];
    }

    public function getRelationNumber(): ?string
    {
        return $this->attributes['relationNumber'];
    }

    public function getEmployee(): ?string
    {
        return $this->attributes['employee'];
    }

    public function getWarehouseCode(): ?string
    {
        return $this->attributes['warehouseCode'];
    }

    public function getProductCode(): ?string
    {
        return $this->attributes['productCode'];
    }

    public function getDateOfExecution(): ?Carbon
    {
        if (!$this->attributes['dateOfExecution']) {
            return null;
        }

        return Carbon::parse($this->attributes['dateOfExecution']);
    }

    public function getDateOfCreation(): ?Carbon
    {
        if (!$this->attributes['dateOfCreation']) {
            return null;
        }

        return Carbon::parse($this->attributes['dateOfCreation']);
    }

    public function getProductReference(): ?string
    {
        return $this->attributes['productReference'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }

    public function getLocation(): ?string
    {
        return $this->attributes['location'];
    }

    public function getReceiptCode(): ?string
    {
        return $this->attributes['receiptCode'];
    }
}
