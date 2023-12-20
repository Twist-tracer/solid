<?php

namespace App\Patterns\Creational\StaticFactory;

/**
 * Форматирование строки
 *
 * @package App\Patterns\Creational\StaticFactory
 */
class FormatString implements Formatter
{
    /**
     * Отформатировать строку
     *
     * @param string $input Строка
     * @return string
     */
    public function format(string $input): string
    {
        return $input;
    }
}
