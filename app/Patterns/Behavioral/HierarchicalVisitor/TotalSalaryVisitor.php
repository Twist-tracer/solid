<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * Конкретный посетитель, который накапливает всю зарплату данной линии отчетности.
 *
 * Class TotalSalaryVisitor
 * @package App\Patterns\Behavioral\HierarchicalVisitor
 */
class TotalSalaryVisitor implements IHierarchicalVisitor
{
    /**
     * @var array
     */
    private array $reportingLine;

    /**
     * @var int
     */
    private int $salary;

    /**
     * TotalSalaryVisitor constructor.
     * @param string $reportingLine
     */
    public function __construct(string $reportingLine)
    {
        $this->reportingLine = explode("/", $reportingLine);
        $this->salary = 0;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    /**
     * @param Employee $employee
     * @return bool
     */
    private function process(Employee $employee): bool
    {
        if (!$this->reportingLine) {
            return false;
        }

        if (count($this->reportingLine)) {
            $first = $this->reportingLine[0] ?? null;
            if ($employee->getName() == $first) {
                $this->salary += $employee->getSalary();
                unset($this->reportingLine[0]);
                $this->reportingLine = array_values($this->reportingLine);
                return true;
            }
        }
        return false;
    }

    /**
     * @param HierarchicalNode $node
     * @return bool
     */
    public function visitEnter(HierarchicalNode $node): bool
    {
        return $this->process($node);

    }

    /**
     * @param HierarchicalNode $node
     * @return bool
     */
    public function visitExit(HierarchicalNode $node): bool
    {
        return empty($this->reportingLine);
    }

    /**
     * @param LeafNode $node
     * @return bool
     */
    public function visitLeaf(LeafNode $node): bool
    {
        return $this->process($node);
    }
}
