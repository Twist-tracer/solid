<?php

namespace App\Patterns\Behavioral\Specification;

use App\Patterns\Behavioral\Specification\Item;

/**
 * Интерфейс спецификации, определяет методы для проверки соответсвий объектов
 *
 * Interface Specification
 * @package App\Architecture\Patterns\Behavioral\Specification
 */
interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}
