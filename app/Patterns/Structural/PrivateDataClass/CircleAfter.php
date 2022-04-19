<?php

namespace App\Patterns\Structural\PrivateDataClass;

/**
 * Демонстрация внедрения шаблона Приватный дата-класс
 *
 * @package App\Patterns\Structural\PrivateDataClass
 */
class CircleAfter
{
    /**
     * Экземпляр приватного дата-класса
     *
     * @var CircleAfterData
     */
    private CircleAfterData $data;

    /**
     * CircleAfter constructor.
     * @param float $radius
     * @param string $color
     * @param int $point
     */
    public function __construct(float $radius, string $color, int $point)
    {
        $this->data = new CircleAfterData($radius, $color, $point);
    }

    /**
     * Метод, работает с дата-классом
     *
     * @return float|int
     */
    public function getDiameter()
    {
        return 2 * $this->data->getRadius();
    }
}
