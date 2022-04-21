<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Фильтрует чистую одежду
 *
 * Class CleanFilter
 * @package App\Patterns\Structural\PipesAndFilters
 */
class CleanFilter implements Modification
{
    /**
     * @param Clothes $clothes
     *
     * @return Clothes|void
     */
    public function modify(Clothes $clothes)
    {
        if ($clothes->isDirty()) {
            return;
        }
        return $clothes;
    }
}
