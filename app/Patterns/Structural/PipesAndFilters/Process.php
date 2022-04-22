<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Интерфейс процесса уборки одежды
 *
 * Class Process
 *
 * @package App\Patterns\Structural\PipesAndFilters
 */
interface Process
{
    /**
     * Метод выполнения процедуры над одеждой
     */
    public function process(): void;
}
