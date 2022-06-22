<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $relationNumber    0101 Relatienr
 * @property string $index             0140 Volgnummer
 * @property string $name              0103 Naam
 * @property string $mobilePhoneNumber 0144 Mobiele telefoon
 * @property string $function          0145 Functie
 * @property string $salutation        0127 Aanhef
 * @property string $email             0120 E-mailadres
 * @property string $sendEmails        1493 E-mails versturen
 */
class Contact extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'relationNumber' => 'F0101',
        'index' => 'F0140',
        'name' => 'F0103',
        'mobilePhoneNumber' => 'F0144',
        'function' => 'F0145',
        'salutation' => 'F0127',
        'email' => 'F0120',
        'sendEmails' => 'F1493',
    ];

    public function getIdField(): string
    {
        return 'relationNumber';
    }

    public function getRelationNumber(): ?string
    {
        return $this->attributes['relationNumber'];
    }

    public function getIndex(): ?string
    {
        return $this->attributes['index'];
    }

    public function getName(): ?string
    {
        return $this->attributes['name'];
    }

    public function getMobilePhoneNumber(): ?string
    {
        return $this->attributes['mobilePhoneNumber'];
    }

    public function getFunction(): ?string
    {
        return $this->attributes['function'];
    }

    public function getSalutation(): ?string
    {
        return $this->attributes['salutation'];
    }

    public function getEmail(): ?string
    {
        return $this->attributes['email'];
    }

    public function getSendEmails(): ?string
    {
        return $this->attributes['sendEmails'];
    }
}
