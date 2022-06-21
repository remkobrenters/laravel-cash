<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $relationNumber 0101 Relatienummer
 * @property string $volgNumber     0140 Volgnummer
 * @property string $email          0120 Email
 */
class Contact extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
        'volgNumber' => 'F0140',
        'email' => 'F0120',
    ];

    public function getIdField(): string
    {
        return 'relationNumber';
    }

    public function getVolgNumber(): ?string
    {
        return $this->attributes['volgNumber'];
    }

    public function getEmail(): ?string
    {
        return $this->attributes['email'];
    }
}
