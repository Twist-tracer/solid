<?php

namespace App\Patterns\Fundamental\PropertyContainer;

trait HasAttributesTrait
{
    protected array $attributes = [];

    public function setAttribute(string $key, $value): self
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    public function getAttribute(string $key): mixed
    {
        return $this->attributes[$key] ?? null;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function removeAttribute(string $key): self
    {
        unset($this->attributes[$key]);

        return $this;
    }

    public function resetAttributes(): self
    {
        $this->attributes = [];

        return $this;
    }
}
