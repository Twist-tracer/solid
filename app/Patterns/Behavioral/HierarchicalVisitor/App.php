<?php

namespace App\Patterns\Behavioral\HierarchicalVisitor;

/**
 *
 * Клиент
 *
 * Class App
 * @package App\Patterns\Behavioral\HierarchicalVisitor
 */
class App
{

    /**
     * @param string[] $args
     */
    public static function main(array $args)
    {
        /**
         * Construct employees reporting line in hierarchical structure as
         * below.
         *
         * Boss
         *  - HR Manager
         *      - HR Staff 1
         *      - HR Staff 2
         *      - HR Staff 3
         *  - Sales Manager
         *      - Sales Staff 1
         *      - Sales Staff 2
         *  - Finance Manager
         */

        $boss = new HierarchicalNode("Boss", 100000);

        $management = [];
        $hrManager = new HierarchicalNode("HR Manager", 6000);
        $management[] = $hrManager;

        $hrStuff = [];
        $hrStuff[] = new LeafNode("HR 1", 1000);
        $hrStuff[] = new LeafNode("HR 2", 1500);
        $hrStuff[] = new LeafNode("HR 3", 3000);
        $hrManager->setSubordinate($hrStuff);

        $salesManager = new HierarchicalNode("Sales Manager", 8000);
        $management[] = $salesManager;
        $salesStuff = [];
        $salesStuff[] = new LeafNode("Sales 1", 1000);
        $salesStuff[] = new LeafNode("Sales 2", 1200);
        $salesStuff[] = new LeafNode("Sales 3", 1300);
        $salesStuff[] = new LeafNode("Sales 4", 2000);
        $salesManager->setSubordinate($salesStuff);

        $boss->setSubordinate($management);

        /**
         * Print all reporting
         */
        $rlVisitor = new ReportingLineVisitor();
        $boss->accept($rlVisitor);

        foreach ($rlVisitor->getPaths() as $path) {
            echo $path;
        }
        /**
         * * Суммируйте заработную плату сотрудников в определенной строке отчетности.
         */

        $tsVisitor = new TotalSalaryVisitor("Boss/Sales Manager");
        $success = $boss->accept($tsVisitor);

        if ($success) {
            echo $tsVisitor->getSalary() . PHP_EOL;
        }

        die();
    }
}
