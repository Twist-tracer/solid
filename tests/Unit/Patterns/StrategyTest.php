<?php

namespace Tests\Unit\Patterns;

use App\Patterns\Behavioral\Strategy\ConcreteStrategyA;
use App\Patterns\Behavioral\Strategy\ConcreteStrategyB;
use App\Patterns\Behavioral\Strategy\Context;
use PHPUnit\Framework\TestCase;

/**
 * Стратегия
 */
class StrategyTest extends TestCase
{
    public function testStrategy(): void
    {
        $context = new Context(new ConcreteStrategyA());

        $this->assertEquals('a,b,c,d,e', $context->doSomeBusinessLogic());

        $context->setStrategy(new ConcreteStrategyB());

        $this->assertEquals('e,d,c,b,a', $context->doSomeBusinessLogic());
    }
}
