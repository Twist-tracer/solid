<?php

namespace App\Patterns\Creational\StaticFactoryMethod;

/**
 * Конкретные Создатели переопределяют фабричный метод для того, чтобы изменить
 * тип результирующего продукта.
 */
class TimeProductCreator
{

    /**
     * Обратите внимание, что сигнатура метода по-прежнему использует тип
     * абстрактного продукта, хотя фактически из метода возвращается конкретный
     * продукт. Таким образом, Создатель может оставаться независимым от
     * конкретных классов продуктов.
     */
    public static function getTomorrow(): TimeProduct
    {
        return new TimeProduct(strtotime("tomorrow"));
    }

    /**
     * Статический фабричный метод
     *
     * @return TimeProduct
     */
    public static function getToday(): TimeProduct
    {
        return new TimeProduct(strtotime("today"));
    }
}
