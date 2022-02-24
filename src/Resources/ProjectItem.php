<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;

/**
 * @property string $projectItem     3620 Dossier artikel registratie
 * @property string $index           3401 Volgnummer
 * @property string $subIndex        3402 Subvolgnummer
 * @property string $item            3420 Artikel
 * @property string $amount          3423 Aantal
 * @property string $dateOfExecution 3501 Uitvoerdatum
 * @property string $project         3600 Dossier
 */
class ProjectItem extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'projectItem' => 'F3620',
        'index' => 'F3401',
        'subIndex' => 'F3402',
        'item' => 'F3420',
        'amount' => 'F3423',
        'dateOfExecution' => 'F3501',
        'project' => 'F3600',
    ];

    public function getIdField(): string
    {
        return 'projectItem';
    }

    public function getIndex(): ?string
    {
        return $this->attributes['index'];
    }

    public function getSubIndex(): ?string
    {
        return $this->attributes['subIndex'];
    }

    public function getItem(): ?string
    {
        return $this->attributes['item'];
    }

    public function getAmount(): ?string
    {
        return $this->attributes['amount'];
    }

    public function getDateOfExecution(): ?CarbonInterface
    {
        return $this->attributes['dateOfExecution']
            ? CarbonImmutable::parse($this->attributes['dateOfExecution'])
            : null;
    }

    public function getProject(): ?string
    {
        return $this->attributes['project'];
    }
}
