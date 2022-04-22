<?php

namespace Tests\Unit\Patterns;

use App\Patterns\Structural\PipesAndFilters\Clothes;
use App\Patterns\Structural\PipesAndFilters\Iron;
use App\Patterns\Structural\PipesAndFilters\Modifier;
use App\Patterns\Structural\PipesAndFilters\Shoulder;
use App\Patterns\Structural\PipesAndFilters\ThreadNeedle;
use PHPUnit\Framework\TestCase;

/**
 * Каналы и фильтры
 */
class PipesAndFiltersTest extends TestCase
{
    public function testPipesAndFilters(): void
    {
        $output = <<<'EOD'
Iron process...
Shoulder process...
Iron process...
Shoulder process...
ThreadNeedle process...

EOD;

        $this->expectOutputString($output);

        $chunkOne = [
            new Clothes(),
            (new Clothes())->setIron(),
            (new Clothes())->setShoulders(),
        ];

        $chunkTwo = [
            (new Clothes())->setIron(),
            (new Clothes())->setShoulders()->setThreadNeed(),
        ];

        $modifier = new Modifier();
        $modifier->modify($chunkOne);

        $modifier->modify($chunkTwo);
    }
}
