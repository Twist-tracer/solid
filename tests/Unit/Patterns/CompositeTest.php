<?php

namespace Tests\Unit\Patterns;

use App\Architecture\Patterns\Structure\Composite\Composite;
use App\Architecture\Patterns\Structure\Composite\Leaf;
use PHPUnit\Framework\TestCase;

/**
 * Компоновщик
 */
class CompositeTest extends TestCase
{
    public function testComposite(): void
    {
        $tree = new Composite();
        $branch1 = new Composite();
        $branch2 = new Composite();
        $branch3 = new Composite();
        $leaf = new Leaf();

        $branch3->add(new Leaf());

        $branch2->add($branch3);
        $branch2->add(new Leaf());
        $branch2->add(new Leaf());
        $branch2->add(new Leaf());

        $branch1->add(new Leaf());

        $tree->add($branch1);
        $tree->add($branch2);

        ob_clean();
        $this->expectOutputString('Branch(Branch(Leaf)+Branch(Branch(Leaf)+Leaf+Leaf+Leaf))');
        echo $tree->operation();

        ob_clean();
        $this->expectOutputString('Leaf');
        echo $leaf->operation();
    }
}
