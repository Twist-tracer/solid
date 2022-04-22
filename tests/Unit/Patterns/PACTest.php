<?php

namespace Tests\Unit\Patterns;

use App\Patterns\Architectural\PAC\PersonControl;
use App\Patterns\Architectural\PAC\SwingPersonAbstraction;
use App\Patterns\Architectural\PAC\SwingPersonPresentation;
use PHPUnit\Framework\TestCase;

/**
 * PAC
 */
class PACTest extends TestCase
{
    public function testPAC(): void
    {
        $str = <<<'DOC'
Вот тут дата:Форматируем: 2000-05-01 10:10:10


DOC;

        $this->expectOutputString($str);

        $presentation = new SwingPersonPresentation();
        $abstraction = new SwingPersonAbstraction();
        $control = new PersonControl($presentation, $abstraction);
        $control->populateBirthDate();
    }
}
