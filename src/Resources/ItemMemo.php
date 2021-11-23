<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $row0     0660 Regel-1
 * @property string $row1     0661 Regel-2
 * @property string $row2     0662 Regel-3
 * @property string $row3     0663 Regel-4
 * @property string $row4     0664 Regel-5
 * @property string $row5     0665 Regel-6
 * @property string $row6     0666 Regel-7
 * @property string $row7     0667 Regel-8
 * @property string $row8     0668 Regel-9
 * @property string $row9     0669 Regel-10
 * @property string $itemCode 2260 Artikelcode
 */
class ItemMemo extends BaseResource
{
    protected array $mapping = [
        'row0' => 'F0660',
        'row1' => 'F0661',
        'row2' => 'F0662',
        'row3' => 'F0663',
        'row4' => 'F0664',
        'row5' => 'F0665',
        'row6' => 'F0666',
        'row7' => 'F0667',
        'row8' => 'F0668',
        'row9' => 'F0669',
        'itemCode' => 'F2260',
    ];

    public function getIdField(): string
    {
        return 'itemCode';
    }

    public function getRow0(): string
    {
        return $this->attributes['row0'];
    }

    public function getRow1(): string
    {
        return $this->attributes['row1'];
    }

    public function getRow2(): string
    {
        return $this->attributes['row2'];
    }

    public function getRow3(): string
    {
        return $this->attributes['row3'];
    }

    public function getRow4(): string
    {
        return $this->attributes['row4'];
    }

    public function getRow5(): string
    {
        return $this->attributes['row5'];
    }

    public function getRow6(): string
    {
        return $this->attributes['row6'];
    }

    public function getRow7(): string
    {
        return $this->attributes['row7'];
    }

    public function getRow8(): string
    {
        return $this->attributes['row8'];
    }

    public function getRow9(): string
    {
        return $this->attributes['row9'];
    }

    public function getItemCode(): string
    {
        return $this->attributes['itemCode'];
    }
}
