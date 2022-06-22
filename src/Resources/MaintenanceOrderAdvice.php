<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

/**
 * @property ?string $itemCode       2260 Artikel code
 * @property ?string $adviceDate     2553 Adviesdatum
 * @property ?string $orderDate      2501 Besteldatum
 * @property ?string $supplierCode   2230 Leveranciersnummer
 * @property ?string $adviceQuantity 2552 Advies aantal
 * @property ?string $warehouseCode  2209 Magazijn
 */
class MaintenanceOrderAdvice extends BaseResource
{
    protected array $mapping = [
        'itemCode' => 'F2260',
        'adviceDate' => 'F2553',
        'orderDate' => 'F2501',
        'supplierCode' => 'F2230',
        'adviceQuantity' => 'F2552',
        'warehouseCode' => 'F2209',
    ];

    public function getIdField(): string
    {
        return 'itemCode';
    }

    public function getItemCode(): ?string
    {
        return $this->attributes['itemCode'];
    }

    public function getAdviceQuantity(): int
    {
        return (int) $this->attributes['adviceQuantity'];
    }

    public function getWarehouseCode(): ?string
    {
        return $this->attributes['warehouseCode'];
    }

    public function getSupplierCode(): ?string
    {
        return $this->attributes['supplierCode'];
    }

    public function getAdviceDate(): ?CarbonInterface
    {
        return $this->attributes['adviceDate']
            ? CarbonImmutable::parse($this->attributes['adviceDate'])
            : null;
    }

    public function getOrderDate(): ?CarbonInterface
    {
        return $this->attributes['orderDate']
            ? CarbonImmutable::parse($this->attributes['orderDate'])
            : null;
    }
}
