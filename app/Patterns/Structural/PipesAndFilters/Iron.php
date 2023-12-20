<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Объект утюга.
 * Реализует метод глажки утюгом.
 *
 * Class Iron
 * @package App\Patterns\Structural\PipesAndFilters
 */
class Iron implements Process
{
    /**
     * Выполняет процесс глажки
     */
    public function process(): void
    {
        echo "Iron process..." . PHP_EOL;
    }
}
