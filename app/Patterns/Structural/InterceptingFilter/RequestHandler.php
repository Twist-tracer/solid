<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Эмулирование обработки основного запроса
 *
 * Class RequestHandler
 *
 * @package App\Patterns\Structural\InterceptingFilter
 */
class RequestHandler
{
    /**
     * Фильтры для выполнения
     *
     * @var array<IProcessor>
     */
    private array $filters = [];

    /**
     * RequestHandler constructor.
     */
    public function __construct()
    {
        $this->filters[] = new DebuggingFilter(new CoreProcessor());
    }

    /**
     * Выполняем запрос
     */
    public function processRequest(Request $request, Response $response): void
    {
        // Выполняем фильтры
        foreach ($this->filters as $filter) {
            $filter->execute($request, $response);
        }

        echo "Main request handler run" . PHP_EOL;
    }
}
