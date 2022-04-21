<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Реализует фильтр процессора
 *
 * Class CoreProcessor
 * @package App\Patterns\Structural\InterceptingFilter
 */
class CoreProcessor implements IProcessor
{

    /**
     * Целевой процесс
     *
     * @var IProcessor|null
     */
    private ?IProcessor $target;

    /**
     * CoreProcessor constructor.
     * @param IProcessor|null $myTarget Целевой процесс
     */
    public function __construct(?IProcessor $myTarget = null)
    {
        $this->target = $myTarget;
    }

    public function execute(Request $req, Response $res): void
    {
        echo "Execute processor filter" . PHP_EOL;
    }
}
