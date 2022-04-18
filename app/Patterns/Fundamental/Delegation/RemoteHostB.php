<?php

namespace App\Patterns\Fundamental\Delegation;

/**
 * Конкретная реализации получения удаленного хоста.
 *
 * Не использует наследования для расширение функционала. Реализует шаблон делегирования.
 *
 * @package App\Patterns\Fundamental\Delegation
 */
class RemoteHostB extends Host
{

    /**
     * Абстрактный хост
     *
     * @var Host
     */
    private Host $remoteHost;

    /**
     * RemoteHostB constructor.
     *
     * @param Host $host Объект типа хост
     */
    public function __construct(Host $host)
    {
        $this->remoteHost = $host;
    }

    /**
     * Изменяет поведение метода, используя композицию класса-родителя
     *
     * @return string
     */
    public function getHost(): string
    {
        $str = "RemoteHostB logic with host: " . $this->host;
        return $this->remoteHost->prepareOutput($str);
    }
}
