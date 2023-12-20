<?php

namespace App\Patterns\Structural\Broker;

/**
 * Объект передаваемого запроса посредством брокера
 *
 * Class CallMessage
 * @package App\Patterns\Structural\Broker
 */
class CallMessage
{

    /**
     * Наименование вызываемого метода
     *
     * @var string
     */
    private string $methodName;

    /**
     * Передаваемые параметры
     *
     * @var mixed
     */
    private $params;

    /**
     * Результат ответа
     *
     * @var int
     */
    private int $result;

    /**
     * Ответ сервера
     * @var string
     */
    private string $serverResult;

    /**
     * CallMessage constructor.
     *
     * @param string $methodName Наименование метода
     * @param mixed $currParams Параметры
     */
    public function __construct(string $methodName = "", $currParams = "")
    {
        $this->methodName = $methodName;
        $this->params = $currParams;
    }

    /**
     * Устанавливает ответ сервера
     *
     * @param string $result Ответ сервера
     */
    public function setServerResult(string $result): void
    {
        $this->serverResult = $result;
    }

    /**
     * Возвращает результат сервера
     *
     * @return string
     */
    public function getServerResult(): string
    {
        return $this->serverResult;
    }

    /**
     * Получить текущие параметры
     *
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Получение наименование метода
     *
     * @return string
     */
    public function getMethodName(): string
    {
        return $this->methodName;
    }

    /**
     * Получить код ответа
     *
     * @return int
     */
    public function getResult(): int
    {
        return $this->result;
    }

    /**
     * Установить код ответа
     *
     * @param int $result Код
     */
    public function setResult(int $result)
    {
        $this->result = $result;
    }
}
