<?php

namespace App\Architecture\Patterns\Behavioral\Specification;

/**
 * Имплементация спецификации И для всех спецификаций
 *
 * Class AndSpecification
 * @package App\Architecture\Patterns\Behavioral\Specification
 */
class AndSpecification implements Specification
{
    /**
     * @var Specification[]
     */
    private array $specifications;

    /**
     * @param Specification[] $specifications
     */
    public function __construct(Specification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * if at least one specification is false, return false, else return true.
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }

        return true;
    }
}
