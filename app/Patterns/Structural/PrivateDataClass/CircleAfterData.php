<?php

namespace App\Patterns\Structural\PrivateDataClass;

/**
 * Представляет собой реализацию шаблона проектирования Приватный дата-класс
 * Class CircleAfterData
 * @package App\Patterns\Structural\PrivateDataClass
 */
class CircleAfterData
{
    /**
     * Приватные атрибуты класса
     * @var float
     */
    private float $radius;
    private string $color;
    private int $point;

    /**
     * CircleAfterData constructor.
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
     * Объявляем методы для получения доступных свойств объекта
     *
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }
}
