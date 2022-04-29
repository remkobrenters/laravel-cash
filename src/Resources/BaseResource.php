<?php

declare(strict_types=1);

namespace Webparking\LaravelCash\Resources;

abstract class BaseResource
{
    protected array $attributes = [];

    protected array $mapping = [];

    public function __construct(\SimpleXMLElement $xml = null)
    {
        if ($xml) {
            $this->map($xml);
        }
    }

    public function __get($key): ?string
    {
        if (isset($this->attributes[$key])) {
            return $this->attributes[$key];
        }

        return null;
    }

    abstract public function getIdField(): string;

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getSaveAttributes(): array
    {
        $saveAttributes = [];
        foreach ($this->attributes as $key => $value) {
            if (!\array_key_exists($key, $this->mapping)) {
                continue;
            }

            $saveAttributes[$this->mapping[$key]] = $value;
        }

        return array_filter($saveAttributes);
    }

    public function getId()
    {
        return $this->attributes[$this->getIdField()];
    }

    /**
     * @param mixed[] $attributes
     *
     * @return static
     */
    public function fill(array $attributes)
    {
        $this->attributes = [];

        foreach ($attributes as $key => $value) {
            if (!\array_key_exists($key, $this->mapping)) {
                throw new \RuntimeException('Mapped key does not exists');
            }

            $this->setAttribute($key, $value);
        }

        return $this;
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
