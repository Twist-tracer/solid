<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Плечики
 *
 * Class Shoulder
 * @package App\Patterns\Structural\PipesAndFilters
 */
class Shoulder implements Process
{
    /**
     * Выполняет процесс глажки
     */
    public function process(): void
    {
        echo "Shoulder process..." . PHP_EOL;
    }
}
