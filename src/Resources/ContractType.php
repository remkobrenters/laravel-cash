<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $contractType              4100 Contractsoort
 * @property string $description               2001 Omschrijving
 * @property string $warrantyPeriodInMonths    4202 Garantietermijn (mnd)
 * @property string $maintenancePeriodInMonths 2351 Onderh.termijn (mnd)
 * @property string $billingPeriodInMonths     4252 Fact. termijn (mnd)
 * @property string $contractInvoiceCostCode   4008 Kostencode contractfactuur
 * @property string $billingMethod             4104 Factureringsmethode
 */
class ContractType extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'contractType' => 'F4100',
        'description' => 'F2001',
        'warrantyPeriodInMonths' => 'F4202',
        'maintenancePeriodInMonths' => 'F2351',
        'billingPeriodInMonths' => 'F4252',
        'contractInvoiceCostCode' => 'F4008',
        'billingMethod' => 'F4104',
    ];

    public function getIdField(): string
    {
        return 'contractType';
    }

    public function getContractType(): ?string
    {
        return $this->attributes['contractType'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }

    public function getWarrantyPeriodInMonths(): ?string
    {
        return $this->attributes['warrantyPeriodInMonths'];
    }

    public function getMaintenancePeriodInMonths(): ?string
    {
        return $this->attributes['maintenancePeriodInMonths'];
    }

    public function getBillingPeriodInMonths(): ?string
    {
        return $this->attributes['billingPeriodInMonths'];
    }

    public function getContractInvoiceCostCode(): ?string
    {
        return $this->attributes['contractInvoiceCostCode'];
    }

    public function getBillingMethod(): ?string
    {
        return $this->attributes['billingMethod'];
    }
}
