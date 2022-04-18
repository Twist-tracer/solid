<?php

namespace App\Patterns\Behavioral\Strategy;

use App\Patterns\Behavioral\Strategy\Strategy;

class ConcreteStrategyB implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
