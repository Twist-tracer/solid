<?php

namespace App\Patterns\Structural\Broker;

/**
 * Класс, обеспечивающий транспорт для шаблона брокера
 *
 * Class Transport
 * @package App\Patterns\Structural\Broker
 */
class Transport
{
    /**
     * Передаваемое сообщение
     *
     * @var string
     */
    private string $message;

    /**
     * Transport constructor.
     * @param string $message Сообщение
     */
    public function __construct(string $message)
    {
        $this->message = $message;

        echo "Transporting..." . PHP_EOL;
        $brokerServer = new BrokerServer($this->message);

        echo "Transporting back data to client..." . PHP_EOL;
        $this->setMessage($brokerServer->getMessage());

    }

    /**
     * Получить сообщение
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     *
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
