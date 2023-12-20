<?php

namespace App\Patterns\Structural\Filter;

/**
 * Объявляет критерии фильтрации
 *
 * @package App\Patterns\Structural\Filter
 */
interface Criteria
{
    /**
     * Обрабатывает требования
     *
     * @param array $laptops список желаемых условий
     *
     * @return array<Laptop>
     */
    public function meets(array $laptops): array;
}
