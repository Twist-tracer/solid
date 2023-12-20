<?php

namespace App\Patterns\Creational\StaticFactoryMethod;

/**
 * Определяет интерфейс для продукта
 *
 * @package App\Patterns\Creational\StaticFactoryMethod
 */
interface ITimeProduct
{

    /**
     * Получить строку времени
     *
     * @return int
     */
    public function getTime(): int;

}
