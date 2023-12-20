<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

/**
 * Пример не изменяемого объекта
 *
 * @package App\Patterns\Fundamental\ImmutableWrapper
 */
class Immutable
{
    public function __construct(protected MutableX $x)
    {
    }

    /**
     * Получить свойство объекта
     */
    public function getX(): MutableX
    {
        return $this->x;
    }
}
