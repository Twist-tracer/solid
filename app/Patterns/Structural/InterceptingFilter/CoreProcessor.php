<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Реализует фильтр процессора
 *
 * Class CoreProcessor
 *
 * @package App\Patterns\Structural\InterceptingFilter
 */
class CoreProcessor implements IProcessor
{
    /**
     * @param ?IProcessor $target Целевой процесс для дебага
     */
    public function __construct(private ?IProcessor $target = null)
    {
    }

    public function execute(Request $request, Response $response): void
    {
        echo "Execute processor filter" . PHP_EOL;

        $this->target?->execute($request, $response);
    }
}
