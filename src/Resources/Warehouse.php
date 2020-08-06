<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $relation       0101 Relatie
 * @property string $description    2001 Omschrijving
 * @property string $warehouseCode  2209 Magazijncode
 * @property string $blocked        2280 Geblokkeerd
 * @property string $transitStock   3289 Transit voorraad
 * @property string $stockType      3297 Soort voorraad
 * @property string $internalSupply 3422 Interne levering
 */
class Warehouse extends BaseResource
{
    protected array $mapping = [
        'relation' => 'F0101',
        'description' => 'F2001',
        'warehouseCode' => 'F2209',
        'blocked' => 'F2280',
        'transitStock' => 'F3289',
        'stockType' => 'F3297',
        'internalSupply' => 'F3422',
    ];

    public function getIdField(): string
    {
        return 'warehouseCode';
    }

    public function getRelation(): ?string
    {
        return $this->attributes['relation'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }

    public function getWarehouseCode(): ?string
    {
        return $this->attributes['warehouseCode'];
    }

    public function getBlocked(): ?string
    {
        return $this->attributes['blocked'];
    }

    public function getTransitStock(): ?string
    {
        return $this->attributes['transitStock'];
    }

    public function getStockType(): ?string
    {
        return $this->attributes['stockType'];
    }

    public function getInternalSupply(): ?string
    {
        return $this->attributes['internalSupply'];
    }
}
