<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $contractType 4100 Contractsoort
 * @property string $description  2001 Omschrijving
 */
class ContractType extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'description' => '2001',
        'contractType' => '4100',
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
}
