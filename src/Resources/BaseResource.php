<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

abstract class BaseResource
{
    protected array $attributes = [];

    protected array $mapping = [];

    abstract public function getIdField(): string;

    public function __construct(\SimpleXMLElement $xml)
    {
        $this->map($xml);
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getId()
    {
        return $this->attributes[$this->getIdField()];
    }

    public function __get($key): ?string
    {
        if (isset($this->attributes[$key])) {
            return $this->attributes[$key];
        }

        return null;
    }

    private function setAttribute($key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    private function map(\SimpleXMLElement $xml): void
    {
        $this->attributes = [];
        foreach ($this->mapping as $key => $value) {
            $this->setAttribute($key, $xml->{$value}->__toString());
        }
    }
}
