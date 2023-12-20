<?php

namespace App\Patterns\Fundamental\MarkerInterface;

/**
 * Изменяемый класс
 *
 * @package App\Patterns\Fundamental\MarkerInterface
 */
class Mutable implements IMutable
{
    /**
     * Свойство объекта
     *
     * @var null|int
     */
    private ?int $x;

    /**
     * Mutable constructor.
     *
     * @param int|null $x
     */
    public function __construct(?int $x = null)
    {
        $this->x = $x;
    }

    /**
     * Установить свойство
     *
     * @param int|null $x Свойство объекта X
     */
    public function setX(?int $x): void
    {
        $this->x = $x;
    }

    /**
     * Получить свойство X
     *
     * @return int|null
     */
    public function getX(): ?int
    {
        return $this->x;
    }
}
