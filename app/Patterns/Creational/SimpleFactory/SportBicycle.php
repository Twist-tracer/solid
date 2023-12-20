<?php

namespace App\Patterns\Creational\SimpleFactory;

/**
 * Класс объекта продукта
 *
 * @package App\Patterns\Creational\SimpleFactory
 */
class SportBicycle implements IBicycle
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
