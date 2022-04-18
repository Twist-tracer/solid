<?php

namespace App\Patterns\Fundamental\ImmutableInterface;

/**
 * Определяет методы объекта Point
 *
 * @package App\Patterns\Fundamental\ImmutableInterface
 */
interface IPoint
{
    /**
     * Установить точку оси X
     *
     * @param int $x Точка оси X
     */
    public function setX(int $x): void;

    /**
     * Установить точку оси Y
     *
     * @param int $y Точка оси Y
     */
    public function setY(int $y): void;

    /**
     * Получить точку X
     *
     * @return int
     */
    public function getX(): int;

    /**
     * Получить точку Y
     *
     * @return int
     */
    public function getY(): int;
}
