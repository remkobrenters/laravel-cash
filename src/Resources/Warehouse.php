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
        'relation' => '0101',
        'description' => '2001',
        'warehouseCode' => '2209',
        'blocked' => '2280',
        'transitStock' => '3289',
        'stockType' => '3297',
        'internalSupply' => '3422',
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
