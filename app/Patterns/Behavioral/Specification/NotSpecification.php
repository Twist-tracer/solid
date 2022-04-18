<?php

namespace App\Patterns\Behavioral\Specification;

use App\Patterns\Behavioral\Specification\Item;
use App\Patterns\Behavioral\Specification\Specification;

/**
 * Имплементация спецификации NOT условия, т.е. несоответсвия спецификации
 *
 * Class NotSpecification
 * @package App\Architecture\Patterns\Behavioral\Specification
 */
class NotSpecification implements Specification
{
    private Specification $specification;

    public function __construct(Specification $specification)
    {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}
