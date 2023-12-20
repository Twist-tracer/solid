<?php


namespace App\Patterns\Fundamental\Delegation;

/**
 * Определяет интерфейс для возможности отправки сетевого пакета
 *
 * @package App\Patterns\Fundamental\Delegation
 */
interface IMessenger
{
    /**
     * Установить хост
     *
     * @param string $host Хост
     *
     * @return void
     */

    public function setHost(string $host): void;

    /**
     * Получить хост
     *
     * @return string
     */
    public function getHost(): string;

}
