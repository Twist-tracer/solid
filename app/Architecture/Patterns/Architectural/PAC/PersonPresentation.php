<?php

namespace App\Architecture\Patterns\Architectural\PAC;

/**
 * Interface PersonPresentation
 * @package App\Architecture\Patterns\Architectural\PAC
 */
interface PersonPresentation
{
    /**
     *
     * @param string $birthDate
     */
    public function renderBirthDate(string $birthDate): void;
}
