<?php

namespace App\Patterns\Creational\SimpleFactory;

/**
 * Класс создаваемого продукта
 *
 * @package App\Patterns\Creational\SimpleFactory
 */
class SimpleBicycle implements IBicycle
{
    /**
     * Метод указания направления
     *
     * @param string $destination Направление
     */
    public function driveTo(string $destination): void
    {
    }
}
