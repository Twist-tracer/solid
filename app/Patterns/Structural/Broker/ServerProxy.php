<?php

namespace App\Patterns\Structural\Broker;

/**
 * Реализует серверный прокси
 *
 * Class ServerProxy
 * @package App\Patterns\Structural\Broker
 */
class ServerProxy
{
    private $result;

    /**
     * ServerProxy constructor.
     * @param CallMessage $msgServer Объект сообщения передаваемый прокси от брокера
     */
    public function __construct(CallMessage $msgServer)
    {
        // Инициализация объекта сервера
        $server = new Server();

        $methodName = $msgServer->getMethodName();
        $params = $msgServer->getParams();

        // Бизнес логика поиска наименования передаваемых методов
        if (method_exists($server, $methodName)) {
            echo "Find server method name $methodName" . PHP_EOL;
            $this->result = $server->$methodName(...$params);
        }
    }

    /**
     * Возвращает объект ответа сервера
     * @return CallMessage
     */
    public function getResult(): CallMessage
    {
        $resultMsgServer = new CallMessage();
        $resultMsgServer->setServerResult($this->result);
        return $resultMsgServer;
    }
}
