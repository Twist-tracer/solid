<?php

namespace App\Patterns\Creational\FactoryMethod;

/**
 * Интерфейс Продукта объявляет операции, которые должны выполнять все
 * конкретные продукты.
 */
interface Product
{
    public function operation(): string;
}
