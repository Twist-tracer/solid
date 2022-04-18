<?php

namespace Tests\Unit\Patterns;

use App\Architecture\Patterns\Architectural\PAC\PersonControl;
use App\Architecture\Patterns\Architectural\PAC\SwingPersonAbstraction;
use App\Architecture\Patterns\Architectural\PAC\SwingPersonPresentation;
use PHPUnit\Framework\TestCase;

/**
 * PAC
 */
class PACTest extends TestCase
{
    public function testExample(): void
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
