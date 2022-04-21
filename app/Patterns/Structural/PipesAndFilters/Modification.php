<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Интерфейс модификации одежды
 *
 * Interface Modification
 * @package App\Patterns\Structural\PipesAndFilters
 */
interface Modification
{
    public function modify(Clothes $clothes);
}
