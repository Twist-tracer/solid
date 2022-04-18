<?php

namespace App\Architecture\Patterns\Architectural\PAC;

/**
 * Абстракция
 *
 * Interface PersonAbstraction
 * @package App\Architecture\Patterns\Architectural\PAC
 */
interface PersonAbstraction
{
    /**
     * Возвращает день рождение
     *
     * @return string
     */
    public function getBirthDate(): string;
}
