<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Определяет интерфейс обработки запроса
 *
 * Interface IProcessor
 *
 * @package App\Patterns\Structural\InterceptingFilter
 */
interface IProcessor
{
    /**
     * Выполнить обработку запроса
     *
     * @param Request $request Объект запроса
     * @param Response $response Объект ответа
     */
    public function execute(Request $request, Response $response): void;
}
