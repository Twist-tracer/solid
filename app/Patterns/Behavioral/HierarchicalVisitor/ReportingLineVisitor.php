<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * Конкретный посетитель, который собирает все линии отчетности.
 *
 * Class ReportingLineVisitor
 * @package App\Patterns\Behavioral\HierarchicalVisitor
 */
class ReportingLineVisitor implements IHierarchicalVisitor
{
    /**
     * @var array
     */
    private array $reportingLines = [];

    /**
     * @var string
     */
    private string $reportingLine = "";

    /**
     * @param HierarchicalNode $node
     * @return bool
     */
    public function visitEnter(HierarchicalNode $node): bool
    {
        $this->reportingLine .= $node->getName() . "/";
        return true;
    }

    /**
     * @param HierarchicalNode $node
     * @return bool
     */
    public function visitExit(HierarchicalNode $node): bool
    {

        // Если выходим, то удаляем из массива
        $this->reportingLine = str_replace($node->getName() . "/", "", $this->reportingLine);

        return strlen($this->reportingLine) == 0;
    }

    /**
     * @param LeafNode $node
     * @return bool
     */
    public function visitLeaf(LeafNode $node): bool
    {
        $this->reportingLines[] = $this->reportingLine . $node->getName() . PHP_EOL;
        return false;
    }

    /**
     * @return array
     */
    public function getPaths(): array
    {
        return $this->reportingLines;
    }
}
