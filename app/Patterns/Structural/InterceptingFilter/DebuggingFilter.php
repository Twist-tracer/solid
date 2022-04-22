<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Реализует фильтр дебага
 *
 * Class DebuggingFilter
 *
 * @package App\Patterns\Structural\InterceptingFilter
 */
class DebuggingFilter implements IProcessor
{
    /**
     * @param ?IProcessor $target Целевой процесс для дебага
     */
    public function __construct(private ?IProcessor $target = null)
    {
    }

    /**
     * Запуск фильтра дебага
     */
    public function execute(Request $request, Response $response): void
    {
        //Do some filter processing here, such as
        echo "Debugging filter run" . PHP_EOL;

        // displaying request parameters
        $this->target?->execute($request, $response);
    }
}
