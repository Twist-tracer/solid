<?php

namespace App\Patterns\Creational\SimpleFactory;

/**
 * Интерфейс продукта
 *
 * @package App\Patterns\Creational\SimpleFactory
 */
interface IBicycle
{
    public function driveTo(string $destination): void;
}
