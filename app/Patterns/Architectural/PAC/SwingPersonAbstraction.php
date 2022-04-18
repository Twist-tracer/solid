<?php

namespace App\Patterns\Architectural\PAC;

use App\Patterns\Architectural\PAC\PersonAbstraction;

class SwingPersonAbstraction implements PersonAbstraction
{
    /**
     * @inheritDoc
     */
    public function getBirthDate(): string
    {
        return "2000-05-01 10:10:10";
    }
}
