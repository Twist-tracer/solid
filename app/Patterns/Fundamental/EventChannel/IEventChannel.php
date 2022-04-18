<?php

namespace App\Patterns\Fundamental\EventChannel;

/**
 * Интерфейс канала событий.
 * Определяет методы для публикации события в канал и подписки на эти события.
 *
 * @package App\Patterns\Fundamental\EventChannel
 */
interface IEventChannel
{

    /**
     * Уведомить о событии публикации
     *
     * @param string $tag Тема или тег новостной ленты
     * @param string $data Содержание события
     *
     * @return void
     */
    public function publish(string $tag, string $data): void;

    /**
     * @param string $tag Тема или тег новостной ленты
     * @param ISubscriber $subscriber Подписчик
     */
    public function subscribe(string $tag, ISubscriber $subscriber): void;
}
