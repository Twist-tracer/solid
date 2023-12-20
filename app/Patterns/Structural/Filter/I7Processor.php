<?php

namespace App\Patterns\Structural\Filter;

class I7Processor implements Criteria
{
    public function meets(array $laptops): array
    {
        return array_filter($laptops, fn($item) => $item->getProcessor() == "i7");
    }
}
