<?php

namespace Tests\Unit\Patterns;

use App\Patterns\Structural\Adapter\Adaptee;
use App\Patterns\Structural\Adapter\Adapter;
use App\Patterns\Structural\Adapter\Target;
use PHPUnit\Framework\TestCase;

/**
 * Адаптер
 */
class AdapterTest extends TestCase
{
    public function testAdapter(): void
    {
        $target = new Target();

        $this->assertEquals('The default target\'s behavior', $target->request());

        $adaptee = new Adaptee();

        $this->expectExceptionMessage('Call to undefined method App\Patterns\Structural\Adapter\Adaptee::request()');
        $this->assertEquals('The extended target\'s behavior', $adaptee->request());

        $adapter = new Adapter($adaptee);

        $this->assertEquals('The extended target\'s behavior', $adapter->request());
    }
}
