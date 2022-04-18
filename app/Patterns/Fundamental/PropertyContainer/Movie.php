<?php

namespace App\Patterns\Fundamental\PropertyContainer;

use App\Patterns\Fundamental\PropertyContainer\HasAttributesInterface;
use App\Patterns\Fundamental\PropertyContainer\HasAttributesTrait;

class Movie implements HasAttributesInterface
{
    use HasAttributesTrait;

    public function __set(string $name, $value): void
    {
        $this->setAttribute($name, $value);
    }

    public function __get($name): mixed {

        return $this->getAttribute($name);
    }

    public function __unset(string $name): void
    {
        $this->removeAttribute($name);
    }
}