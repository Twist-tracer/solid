<?php

namespace App\Patterns\Structural\Filter;

/**
 * Определяет интерфейс объекта
 *
 * @package App\Patterns\Structural\Filter
 */
interface ILaptop
{

    /**
     * Получить процессор
     * @return string
     */
    public function getProcessor(): string;

    /**
     * Получить объем памяти
     * @return int
     */
    public function getGb(): int;

    /**
     * Получить операционную систему
     * @return string
     */
    public function getOs(): string;
}
