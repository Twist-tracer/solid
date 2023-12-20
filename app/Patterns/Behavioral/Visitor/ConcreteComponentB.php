<?php

namespace App\Patterns\Behavioral\Visitor;

class ConcreteComponentB implements Component
{
    /**
     * То же самое здесь: visitConcreteComponentB => ConcreteComponentB
     */
    public function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    public function specialMethodOfConcreteComponentB(): string
    {
        return "B";
    }
}
