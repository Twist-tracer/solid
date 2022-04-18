<?php

namespace App\Patterns\Fundamental\EventChannel;

/**
 * Интерфейс определяющий поведение для подписчиков
 *
 * Interface ISubscriber
 * @package App\Patterns\Fundamental\EventChannel
 */
interface ISubscriber
{
    /**
     * Получить уведомление подписчика
     *
     * @param string $data
     */
    public function notify(string $data): void;

    /**
     * Получить имя подписчика
     *
     * @return string
     */
    public function getName(): string;
}
