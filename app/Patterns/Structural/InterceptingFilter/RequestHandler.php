<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Эмулирование обработки основного запроса
 *
 * Class RequestHandler
 * @package App\Patterns\Structural\InterceptingFilter
 */
class RequestHandler
{
    /**
     * Фильтры для выполнения
     *
     * @var array
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
     *
     * @param Request $req
     * @param Response $res
     */
    public function processRequest(Request $req, Response $res)
    {

        // Выполняем фильтры
        foreach ($this->filters as $filter) {
            $filter->execute($req, $res);
        }
        echo "Main request handler run" . PHP_EOL;
    }
}
