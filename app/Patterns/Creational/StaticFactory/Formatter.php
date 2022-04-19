<?php

declare(strict_types=1);

namespace App\Patterns\Creational\StaticFactory;

/**
 * Форматирование продукта
 *
 * @package App\Patterns\Creational\StaticFactory
 */
interface Formatter
{

    /**
     * Определяет метод форматирования объекта продукта
     *
     * @param string $input Форматирование
     * @return string
     */
    public function format(string $input): string;
}
