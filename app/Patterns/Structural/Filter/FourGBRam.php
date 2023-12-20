<?php

namespace App\Patterns\Structural\Filter;

/**
 * Критерий для лэптопов с 4 GB RAM
 * @package App\Patterns\Structural\Filter
 */
class FourGBRam implements Criteria
{
    public function meets(array $laptops): array
    {
        return array_filter($laptops, fn($item) => $item->getGB() == 4);
    }
}
