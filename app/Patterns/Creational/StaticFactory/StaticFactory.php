<?php

declare(strict_types=1);

namespace App\Patterns\Creational\StaticFactory;

use InvalidArgumentException;

/**
 * Реализация шаблона Статическая Фабрика.
 *
 * Замечание 1: Статический - означает глобальное состояние, что является неким злом, потому что нельзя использовать в
 * качестве mock-объектов при тестировании.
 * Замечание 2: Нельзя создать дочерние классы, использовать в качестве mock-объекта или иметь несколько экземпляров.
 */
final class StaticFactory
{

    /**
     * Статический метод
     *
     * @param string $type Тип создаваемого объекта
     *
     * @return Formatter
     */
    public static function factory(string $type): Formatter
    {
        if ($type == "number") {
            return new FormatNumber();
        } elseif ($type == 'string') {
            return new FormatString();
        }

        throw new InvalidArgumentException('Unknown format given');
    }
}
