<?php

namespace App\Patterns\Structural\BindingProperties;

interface IMenu
{
    public function setProperty(string $name, int $val): void;

    public function getProperty(string $name): int;
}
