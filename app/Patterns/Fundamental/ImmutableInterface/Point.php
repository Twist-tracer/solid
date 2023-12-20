<?php

namespace App\Patterns\Fundamental\ImmutableInterface;

/**
 * Реализуем объект точки
 *
 * @package App\Patterns\Fundamental\ImmutableInterface
 */
class Point implements IPoint
{

    /**
     * Точка X
     *
     * @var int
     */
    protected int $x;

    /**
     * Точка $y
     *
     * @var int
     */
    protected int $y;

    /**
     * @inheritDoc
     */
    public function setX(int $x): void
    {
        $this->x = $x;
    }

    /**
     * @inheritDoc
     */
    public function setY(int $y): void
    {
        $this->y = $y;
    }

    /**
     * @inheritDoc
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @inheritDoc
     */
    public function getY(): int
    {
        return $this->y;
    }
}
