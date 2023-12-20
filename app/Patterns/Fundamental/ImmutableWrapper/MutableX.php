<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

/**
 * Пример изменяемого объекта
 *
 * @package App\Patterns\Fundamental\ImmutableWrapper
 */
class MutableX
{
    /**
     * Свойства объекта Y
     *
     * @var  int
     */
    protected int $y;

    /**
     * Свойства объекта X
     *
     * @var  int
     */
    protected int $x;

    /**
     * Установить новое значение свойства
     *
     * @param int $y
     */
    public function setY(int $y)
    {
        $this->y = $y;
    }

    /**
     * Установить новое значение свойства
     *
     * @param int $x
     */
    public function setX(int $x)
    {
        $this->x = $x;
    }

    /**
     * Возвращает свойство X
     *
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }
}
