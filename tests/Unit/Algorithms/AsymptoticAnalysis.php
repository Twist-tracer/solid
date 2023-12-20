<?php

namespace Tests\Unit\Algorithms;

use PHPUnit\Framework\TestCase;
use App\Algorithms\AsymptoticAnalysis\Algorithms;

class AsymptoticAnalysis extends TestCase
{
    public function testSearch(): void
    {
        $algorithms = new Algorithms();

        $this->assertEquals(3, $algorithms->search([1, 10, 41, 23, 74], 23));

        $this->assertEquals(-1, $algorithms->search([1, 10, 41, 23, 74], 38));
    }

    public function testCycleO1(): void
    {
        $algorithms = new Algorithms();

        $this->expectOutputString('0123');

        $algorithms->cycleO1();
    }

    public function testCycleON(): void
    {
        $algorithms = new Algorithms();

        $this->expectOutputString('01234');

        $algorithms->cycleON(5);
    }

    public function testCycleOLogA(): void
    {
        $algorithms = new Algorithms();

        $this->assertEquals(16, $algorithms->cycleLog(43162));
    }
}
