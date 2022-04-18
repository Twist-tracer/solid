<?php

namespace App\Architecture\Patterns\Architectural\PAC;

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
