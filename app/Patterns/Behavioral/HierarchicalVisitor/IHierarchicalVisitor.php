<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 * Interface IHierarchicalVisitor
 * @package App\Patterns\Behavioral\HierarchicalVisitor
 */
interface IHierarchicalVisitor
{

    public function visitEnter(HierarchicalNode $node): bool;

    public function visitExit(HierarchicalNode $node): bool;

    public function visitLeaf(LeafNode $node): bool;

}
