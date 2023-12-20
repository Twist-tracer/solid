<?php

namespace App\Patterns\Structural\PrivateDataClass;

/**
 * Обычная реализация
 *
 * @package App\Patterns\Structural\PrivateDataClass
 */
class CircleBefore
{
    private float $radius;
    private string $color;
    private int $point;

    /**
     * CircleBefore constructor.
     * @param float $radius
     * @param string $color
     * @param int $point
     */
    public function __construct(float $radius, string $color, int $point)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->point = $point;
    }

    /**
     * Работа с приватными свойствами класса
     *
     * @return float|int
     */
    public function getDiameter()
    {
        return 2 * $this->radius;
    }
}
