<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

/**
 * Пример не изменяемой коллекции
 *
 * @package App\Patterns\Fundamental\ImmutableWrapper
 */
class ImmutableCollection
{
    /**
     * @param Collection $x
     */
    public function __construct(protected Collection $x)
    {
    }

    /**
     * Получить свойство объекта
     *
     */
    public function getX(): Collection
    {
        return $this->x;
    }
}
