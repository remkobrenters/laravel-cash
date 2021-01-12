<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $name    F2001 Naam
 * @property string $email   F0120 E-mailadres
 * @property string $code    F2205 Code
 * @property string $blocked F2280 Geblokkeerd
 */
class Employee extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'name' => 'F2001',
        'email' => 'F0120',
        'code' => 'F2205',
        'blocked' => 'F2280',
    ];

    public function getIdField(): string
    {
        return 'code';
    }

    public function getName(): ?string
    {
        return $this->attributes['name'];
    }

    public function getEmail(): ?string
    {
        return $this->attributes['email'];
    }

    public function getCode(): ?string
    {
        return $this->attributes['code'];
    }

    public function getBlocked(): ?string
    {
        return $this->attributes['blocked'];
    }
}
