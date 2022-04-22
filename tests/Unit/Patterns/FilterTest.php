<?php

namespace Tests\Unit\Patterns;

use App\Patterns\Structural\Filter\AndCriteria;
use App\Patterns\Structural\Filter\FourGBRam;
use App\Patterns\Structural\Filter\I7Processor;
use App\Patterns\Structural\Filter\Laptop;
use App\Patterns\Structural\Filter\Mac;
use PHPUnit\Framework\TestCase;

/**
 * Фильтр
 */
class FilterTest extends TestCase
{
    public function testFilter(): void
    {
        $laptops = [
            new Laptop('i9', 8, 'Windows'),
            new Laptop('i7', 4, 'Windows'),
            new Laptop('i7', 4, 'MAC'),
            new Laptop('i5', 4, 'MAC'),
            new Laptop('i5', 8, 'MAC'),
        ];

        $criteria = new AndCriteria([new I7Processor(), new FourGBRam(), new Mac()]);

        $filteredLaptops = $criteria->meets($laptops);

        $this->assertcount(1, $filteredLaptops);

        /** @var Laptop $filteredLaptop */
        $filteredLaptop = reset($filteredLaptops);
        $this->assertEquals('i7', $filteredLaptop->getProcessor());
        $this->assertEquals(4, $filteredLaptop->getGb());
        $this->assertEquals('MAC', $filteredLaptop->getOs());
    }
}
