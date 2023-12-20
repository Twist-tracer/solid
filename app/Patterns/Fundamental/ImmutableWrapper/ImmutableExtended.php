<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

/**
 * Пример не изменяемого объекта
 *
 * @package App\Patterns\Fundamental\ImmutableWrapper
 */
class ImmutableExtended extends Immutable
{
    /**
     * Получить свойство объекта
     */
    public function getX(): MutableX
    {
        $this->x->setY(mt_rand(0, 999));
        return $this->x;
    }
}
