<?php

namespace App\Patterns\Behavioral\PublisherSubscriber;

/**
 * Реализация шаблона Издатель-подписчик
 *
 * Class PublisherSubscriber
 * @package App\Patterns\Behavioral\PublisherSubscriber
 */
class PublisherSubscriber
{
    /**
     * Обработчики
     *
     * @var array
     */
    private array $handlers = [];

    /**
     * Подписать на событие
     *
     * @param string $eventName Наименование события
     * @param array $callback
     */
    public function subscribe(string $eventName, array $callback): void
    {
        if (!isset($this->handlers[$eventName])) {
            $this->handlers[$eventName] = [];
        }

        $this->handlers[$eventName][] = $callback;
    }

    /**
     * Публикация событий
     *
     * @param string $eventName Событие
     * @param array $args Аргументы для обработчиков событий
     */
    public function publish(string $eventName, array $args)
    {
        if (isset($this->handlers[$eventName])) {
            foreach ($this->handlers[$eventName] as $handler) {
                call_user_func($handler, $args);
            }
        }
    }
}
