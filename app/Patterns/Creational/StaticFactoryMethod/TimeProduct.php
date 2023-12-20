<?php

namespace App\Patterns\Creational\StaticFactoryMethod;

/**
 * Класс времени
 *
 * @package App\Patterns\Creational\StaticFactoryMethod
 */
class TimeProduct implements ITimeProduct
{

    /**
     * Свойство времени
     *
     * @var int
     */
    private int $time;

    /**
     * TimeProduct constructor.
     *
     * @param $time
     */
    public function __construct(int $time)
    {
        $this->time = $time;
    }

    /**
     * @inheritDoc
     */
    public function getTime(): int
    {
        return $this->time;
    }
}
