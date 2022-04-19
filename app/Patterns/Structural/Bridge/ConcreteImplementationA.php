<?php

namespace App\Patterns\Structural\Bridge;

/**
 * Каждая Конкретная Реализация соответствует определённой платформе и реализует
 * интерфейс Реализации с использованием API этой платформы.
 * Например: Реализовать легковое авто
 */
class ConcreteImplementationA implements Implementation
{
    /**
     * Операция в конкретной реализации
     *
     * @return string
     */
    public function operationImplementation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}
