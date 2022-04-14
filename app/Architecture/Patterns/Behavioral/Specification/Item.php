<?php

namespace App\Architecture\Patterns\Behavioral\Specification;

/**
 *
 * Class Item
 * @package App\Architecture\Patterns\Behavioral\Specification
 */
class Item
{
    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
