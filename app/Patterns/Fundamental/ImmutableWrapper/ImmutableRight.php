<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

/**
 * Пример не изменяемого объекта
 *
 * Обязательно должен быть объявлен как final
 *
 * @package App\Patterns\Fundamental\ImmutableWrapper
 */
final class ImmutableRight
{
    public function __construct(protected MutableX $x)
    {
    }

    /**
     * Получить свойство объекта
     */
    public function getX(): int
    {
        return $this->x->getX();
    }
}
