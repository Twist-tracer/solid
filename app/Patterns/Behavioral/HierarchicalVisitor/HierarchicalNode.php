<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * CompositeElement (HierarchicalNode): элемент, который может содержать дочерние элементы: CompositeElement или LeafElement.
 * Он реализует метод accept (), чтобы посетитель мог выполнить с ним операцию. Это также заставляет дочерние элементы принимать
 * посетителя, чтобы их можно было посещать и обрабатывать.
 *
 * Class HierarchicalNode
 * @package App\Patterns\Behavioral\HierarchicalVisitor
 */
class HierarchicalNode extends Employee
{

    /** Список подчиненных
     * @var array
     */
    private array $subordinates;

    public function __construct(string $name, int $salary)
    {
        parent::__construct($name, $salary);
    }

    /**
     * Устанавливает подчиненных
     *
     * @param array $subordinates
     */
    public function setSubordinate(array $subordinates): void
    {
        $this->subordinates = $subordinates;
    }

    /**
     * @inheritDoc
     */
    public function accept(IHierarchicalVisitor $v): bool
    {
        if ($v->visitEnter($this)) {
            if ($this->subordinates != null) {
                foreach ($this->subordinates as $employee) {
                    $collectedAll = $employee->accept($v);
                    if ($collectedAll) {
                        break;
                    }
                }
            }
        }

        return $v->visitExit($this);
    }
}
