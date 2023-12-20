<?php

declare(strict_types=1);

namespace App\Patterns\Creational\StaticFactory;

/**
 * Форматирование числа
 *
 * @package App\Patterns\Creational\StaticFactory
 */
class FormatNumber implements Formatter
{

    /**
     * Форматируем число
     *
     * @param string $input Входные данные
     * @return string
     */
    public function format(string $input): string
    {
        return number_format((int)$input);
    }
}
