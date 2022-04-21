<?php

namespace App\Patterns\Structural\Broker;

/**
 * Реализует сервер брокера
 *
 * Class BrokerServer
 * @package App\Patterns\Structural\Broker
 */
class BrokerServer
{

    /**
     * Наименование вызываемого метода
     *
     * @var string
     */
    private string $methodName;

    /**
     * Параметры метода
     *
     * @var mixed
     */
    private $params;

    /**
     * Объект запроса
     *
     * @var CallMessage
     */
    private CallMessage $msgServer;

    /**
     * Сообщение
     *
     * @var string
     */
    private string $message;

    /**
     * BrokerServer constructor.
     * @param string $message Сообщение
     */
    public function __construct(string $message)
    {
        // Парсим входящее сообщение
        $this->parseMessage($message);

        // Передать сообщение server-side proxy
        echo "Server Broker transferring data to Server-Side Proxy" . PHP_EOL;
        $server = new ServerProxy($this->msgServer);

        // Получаем и устанавливаем полученные данные
        echo "Returning results..." . PHP_EOL;
        $this->msgServer = $server->getResult();

        $this->setMessage($this->msgServer->getServerResult());
    }

    /**
     * Парсит входящее сообщение
     *
     * @param string $message Тело сообщения
     */
    private function parseMessage(string $message): void
    {
        [$methodName, $params] = explode(":", $message);
        $this->methodName = $methodName;
        $this->params = explode("|", $params);

        $this->msgServer = new CallMessage($methodName, $this->params);
    }

    /**
     * Устанавливает сообщение
     *
     * @param string $message Тело сообщения
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Получить сообщение
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
