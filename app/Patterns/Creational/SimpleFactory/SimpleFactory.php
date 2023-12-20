<?php

declare(strict_types=1);

namespace App\Patterns\Creational\SimpleFactory;

/**
 * Реализует шаблон проектирования Простая Фабрика
 *
 * @package App\Patterns\Creational\SimpleFactory
 */
class SimpleFactory
{
    /**
     * @param string $type Тип создаваемого продукта
     *
     * @return IBicycle
     */
    public function createBicycle(string $type): IBicycle
    {
        if ($type == "sport") {
            return new SportBicycle();
        }
        return new SimpleBicycle();
    }
}
