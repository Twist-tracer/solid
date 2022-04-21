<?php

namespace App\Patterns\Behavioral\Specification;

/**
 * Спецификация для цены
 *
 * Class PriceSpecification
 * @package App\Architecture\Patterns\Behavioral\Specification
 */
class PriceSpecification implements Specification
{
    private ?float $maxPrice;
    private ?float $minPrice;

    public function __construct(?float $minPrice, ?float $maxPrice)
    {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    /**
     * Реализация валидации для объекта цены
     *
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->maxPrice !== null && $item->getPrice() > $this->maxPrice) {
            return false;
        }

        if ($this->minPrice !== null && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}
