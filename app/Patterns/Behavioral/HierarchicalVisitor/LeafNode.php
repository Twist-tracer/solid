<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * LeafElement (LeafNode): элемент, не имеющий дочерних элементов. Он реализует метод accept (), чтобы посетитель мог выполнять операцию только с ним.
 *
 * Class LeafNode
 * @package App\Patterns\Behavioral\HierarchicalVisitor
 */
class LeafNode extends Employee
{

    /**
     * LeafNode constructor.
     * @param string $name
     * @param int $salary
     */
    public function __construct(string $name, int $salary)
    {
        parent::__construct($name, $salary);
    }

    /**
     * @inheritDoc
     */
    public function accept(IHierarchicalVisitor $v): bool
    {
        return $v->visitLeaf($this);
    }
}
