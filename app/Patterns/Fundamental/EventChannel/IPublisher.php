<?php

namespace App\Patterns\Fundamental\EventChannel;

/**
 * Определяет поведение для издателя
 *
 * @package App\Patterns\Fundamental\EventChannel
 */
interface IPublisher
{
    /**
     * Отправить уведомление подписчикам
     *
     * @param string $data Данные для отправки
     */
    public function publish(string $data): void;
}
