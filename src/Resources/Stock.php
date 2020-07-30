<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $warehouse 2209 Magazijncode
 * @property string $item      2260 Artikelcode
 * @property string $amount    2273 Technische voorraad
 * @property string $date      2298 Datum voorraadmutatie
 */
class Stock extends BaseResource
{
    protected array $mapping = [
        'warehouse' => '2209',
        'item' => '2260',
        'amount' => '2273',
        'date' => '2298',
    ];

    public function getIdField(): string
    {
        return '';
    }

    public function getWarehouse(): ?string
    {
        return $this->attributes['warehouse'];
    }

    public function getItem(): ?string
    {
        return $this->attributes['item'];
    }

    public function getAmount(): ?string
    {
        return $this->attributes['amount'];
    }

    public function getDate(): ?string
    {
        return $this->attributes['date'];
    }
}
