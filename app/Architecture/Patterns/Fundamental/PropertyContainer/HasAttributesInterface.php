<?php

namespace App\Architecture\Patterns\Fundamental\PropertyContainer;

interface HasAttributesInterface
{
    public function setAttribute(string $key, $value): self;

    public function getAttribute(string $key): mixed;

    public function getAttributes(): array;

    public function removeAttribute(string $key): self;

    public function resetAttributes(): self;
}

