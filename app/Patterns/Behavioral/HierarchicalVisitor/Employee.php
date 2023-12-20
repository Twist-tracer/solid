<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * Element (Employee): общая основа для CompositeElement и LeafElement. Интерфейс / класс, определяющий протокол accept ().
 *
 * Class Employee
 * @package App\Patterns\Behavioral\HierarchicalVisitor
 */
abstract class Employee
{
    /**
     * Имя
     *
     * @var string
     */
    private string $name;

    /**
     * Зарплата
     *
     * @var int
     */
    private int $salary;

    /**
     * Employee constructor.
     *
     * @param string $name
     * @param int $salary
     */
    public function __construct(string $name, int $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * Получить Имя
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param IHierarchicalVisitor $v
     * @return bool
     */
    public abstract function accept(IHierarchicalVisitor $v): bool;
}
