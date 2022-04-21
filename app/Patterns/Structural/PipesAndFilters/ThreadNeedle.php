<?php

namespace App\Patterns\Structural\PipesAndFilters;

class ThreadNeedle implements Process
{
    /**
     * @inheritDoc
     */
    public function process(): void
    {
        echo "ThreadNeedle process..." . PHP_EOL;
    }
}
