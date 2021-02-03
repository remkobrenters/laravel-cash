<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $itemGroup   2202 Artikelgroep
 * @property string $description 2001 Omschrijving
 */
class ItemGroupTwo extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'description' => 'F2001',
        'itemGroup' => 'F2202',
    ];

    public function getIdField(): string
    {
        return 'itemGroup';
    }

    public function getItemGroup(): ?string
    {
        return $this->attributes['itemGroup'];
    }

    public function getDescription(): ?string
    {
        return $this->attributes['description'];
    }
}
