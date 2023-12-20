<?php

namespace App\Patterns\Fundamental\MarkerInterface;

/**
 * Определяет интерфейс для изменяемого объекта
 *
 * @package App\Patterns\Fundamental\MarkerInterface
 */
interface IMutable
{

    /**
     * Установить свойство
     *
     * @param int|null $x Свойство объекта X
     */
    public function setX(?int $x): void;

    /**
     * Получить свойство X
     *
     * @return int|null
     */
    public function getX();
}
