<?php

namespace App\Architecture\Patterns\Behavioral\Specification;

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
