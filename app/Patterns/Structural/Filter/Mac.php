<?php

namespace App\Patterns\Structural\Filter;

/**
 * Критерии для ноутбуков Mac
 *
 * @package App\Patterns\Structural\Filter
 */
class Mac implements Criteria
{
    /**
     * @inheritDoc
     */
    public function meets(array $laptops): array
    {
        return array_filter($laptops, fn($item) => $item->getOS() == "MAC");
    }
}
