<?php

namespace App\Patterns\Behavioral\SingleServingVisitor;

use App\Patterns\Behavioral\Visitor\ConcreteComponentA;
use App\Patterns\Behavioral\Visitor\ConcreteComponentB;
use App\Patterns\Behavioral\Visitor\Visitor;

/**
 * Одноразовый посетитель
 * Class SingleServingVisitor
 * @package App\Patterns\Behavioral\SingleServingVisitor
 */
class SingleServingVisitor implements Visitor
{
    /**
     * Объект класса
     *
     * @var $this |null
     */
    public static ?self $instance = null;

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new SingleServingVisitor();
        }
        return self::$instance;
    }

    public function visitConcreteComponentA(ConcreteComponentA $element): void
    {
        echo __FUNCTION__ . PHP_EOL;
    }

    public function visitConcreteComponentB(ConcreteComponentB $element): void
    {
        echo __FUNCTION__ . PHP_EOL;
    }
}
