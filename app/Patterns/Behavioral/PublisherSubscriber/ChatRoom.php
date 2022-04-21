<?php

namespace App\Patterns\Behavioral\PublisherSubscriber;

/**
 * Пример использования шаблона Издатель-подписчик
 * В отличие от Observer или Event Channel (шины событий), связь между объектами осуществляется посредством обратных вызовов.
 *
 * Class ChatRoom
 * @package App\Patterns\Behavioral\PublisherSubscriber
 */
class ChatRoom
{
    /**
     * Объект издателя-подписчика
     *
     * @var PublisherSubscriber
     */
    private PublisherSubscriber $PublisherSubscriber;

    /**
     * ChatRoom constructor.
     * Инициирует подписку на издателя
     *
     */
    public function __construct()
    {
        $this->PublisherSubscriber = new PublisherSubscriber();
        $this->PublisherSubscriber->subscribe("message", [
            __CLASS__,
            "emitMessage",
        ]);
    }

    /**
     * Публикация сообщения
     *
     * @param array $msg
     */
    static public function emitMessage(array $msg)
    {
        foreach ($msg as $m) {
            echo $m . PHP_EOL;
        }
    }

    /**
     * Отправляет сообщение издателем
     * @param string $msg
     */
    public function sendMessage(string $msg)
    {
        $this->PublisherSubscriber->publish("message", [$msg]);
    }
}
