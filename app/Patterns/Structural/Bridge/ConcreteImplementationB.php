<?php

namespace App\Patterns\Structural\Bridge;

/**
 * Другая реализация
 *
 * @package App\Patterns\Structural\Bridge
 */
class ConcreteImplementationB implements Implementation
{
    public function operationImplementation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}
