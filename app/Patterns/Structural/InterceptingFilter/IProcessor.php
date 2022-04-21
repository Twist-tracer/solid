<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Определяет интерфейс обработки запроса
 *
 * Interface IProcessor
 * @package App\Patterns\Structural\InterceptingFilter
 */
interface IProcessor
{
    /**
     * Выполнить обработку запроса
     *
     * @param Request $req Объект запроса
     * @param Response $res Объект ответа
     */
    public function execute(Request $req, Response $res): void;
}
