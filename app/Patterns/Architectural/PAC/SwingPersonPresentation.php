<?php

namespace App\Patterns\Architectural\PAC;

use App\Patterns\Architectural\PAC\PersonPresentation;

class SwingPersonPresentation implements PersonPresentation
{
    /**
     * @inheritDoc
     */
    public function renderBirthDate(string $birthDate): void
    {
        echo "Вот тут дата:" . $birthDate . PHP_EOL;
    }
}
