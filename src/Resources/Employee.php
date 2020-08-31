<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

/**
 * @property string $employeeNumber       2205 Medewerker
 * @property string $name                 2001 Naam
 * @property string $nickName             2029 Roepnaam
 * @property string $function             2009 Functieomschrijving
 * @property string $education            2020 Opleiding
 * @property string $birthDate            2021 Geboortedatum
 * @property string $employedSince        2023 Datum in dienst
 * @property string $identification       2025 Identificatie
 * @property string $socialSecurityNumber 2026 Sofi-nummer
 * @property string $payrollNumber        2027 Salarisadministratienummer
 * @property string $relationNumber       0101 Relatienr
 * @property string $functionGroup        2030 Functiegroep
 * @property string $rateGroup            3190 Tariefgroep
 * @property string $timeRegistrationCode 3801 Urenregistratiecode
 * @property string $schedule             3810 Rooster
 * @property string $scheduleScheme       3877 RoosterSchema
 * @property string $firstSchemeWeek      3878 Ingangsweek schema
 * @property string $isBlocked            2280 Geblokkeerd
 * @property string $employedUntil        2024 Datum uit dienst
 * @property string $employeeCode         0142 Pers.code
 */
class Employee extends BaseResource implements ResourceInterface
{
    protected array $mapping = [
        'employeeNumber' => 'F2205',
        'name' => 'F2001',
        'nickName' => 'F2029',
        'function' => 'F2009',
        'education' => 'F2020',
        'birthDate' => 'F2021',
        'employedSince' => 'F2023',
        'identification' => 'F2025',
        'socialSecurityNumber' => 'F2026',
        'payrollNumber' => 'F2027',
        'relationNumber' => 'F0101',
        'functionGroup' => 'F2030',
        'rateGroup' => 'F3190',
        'timeRegistrationCode' => 'F3801',
        'schedule' => 'F3810',
        'scheduleScheme' => 'F3877',
        'firstSchemeWeek' => 'F3878',
        'isBlocked' => 'F2280',
        'employedUntil' => 'F2024',
        'employeeCode' => 'F0142',
    ];

    public function getIdField(): string
    {
        return 'employeeNumber';
    }

    public function getEmployeeNumber(): string
    {
        return $this->attributes['employeeNumber'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function getNickName(): string
    {
        return $this->attributes['nickName'];
    }

    public function getFunction(): string
    {
        return $this->attributes['function'];
    }

    public function getEducation(): string
    {
        return $this->attributes['education'];
    }

    public function getBirthDate(): string
    {
        return $this->attributes['birthDate'];
    }

    public function getEmployedSince(): string
    {
        return $this->attributes['employedSince'];
    }

    public function getIdentification(): string
    {
        return $this->attributes['identification'];
    }

    public function getSocialSecurityNumber(): string
    {
        return $this->attributes['socialSecurityNumber'];
    }

    public function getPayrollNumber(): string
    {
        return $this->attributes['payrollNumber'];
    }

    public function getRelationNumber(): string
    {
        return $this->attributes['relationNumber'];
    }

    public function getFunctionGroup(): string
    {
        return $this->attributes['functionGroup'];
    }

    public function getRateGroup(): string
    {
        return $this->attributes['rateGroup'];
    }

    public function getTimeRegistrationCode(): string
    {
        return $this->attributes['timeRegistrationCode'];
    }

    public function getSchedule(): string
    {
        return $this->attributes['schedule'];
    }

    public function getScheduleScheme(): string
    {
        return $this->attributes['scheduleScheme'];
    }

    public function getFirstSchemeWeek(): string
    {
        return $this->attributes['firstSchemeWeek'];
    }

    public function getIsBlocked(): string
    {
        return $this->attributes['isBlocked'];
    }

    public function getEmployedUntil(): string
    {
        return $this->attributes['employedUntil'];
    }

    public function getEmployeeCode(): string
    {
        return $this->attributes['employeeCode'];
    }
}
