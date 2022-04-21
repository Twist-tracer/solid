<?php

namespace App\Patterns\Structural\InterceptingFilter;

/**
 * Реализует фильтр дебага
 *
 * Class DebuggingFilter
 * @package App\Patterns\Structural\InterceptingFilter
 */
class DebuggingFilter implements IProcessor
{
    /**
     * Целевой процесс для дебага
     *
     * @var IProcessor
     */
    private IProcessor $target;

    /**
     * DebuggingFilter constructor.
     *
     * @param IProcessor $myTarget Процесс для дебага
     */
    public function __construct(IProcessor $myTarget)
    {
        $this->target = $myTarget;
    }

    /**
     * Запуск фильтра дебага
     *
     * @param Request $req Объект запроса
     * @param Response $res Объект ответа
     */
    public function execute(Request $req, Response $res): void
    {
        //Do some filter processing here, such as
        echo "Debugging filter run" . PHP_EOL;
        // displaying request parameters
        $this->target->execute($req, $res);
    }
}
