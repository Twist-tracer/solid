<?php

namespace App\Patterns\Fundamental\Delegation;

/**
 * Делегирует выполнение конкретным делегатам
 *
 * @package App\Patterns\Fundamental\Delegation
 */
class Delegator implements IMessenger
{

    /**
     * Активный делегат
     *
     * @var IMessenger
     */
    private IMessenger $delegate;

    /**
     * @inheritDoc
     */
    public function getHost(): string
    {
        return $this->delegate->getHost();
    }

    /**
     * Делегирует выполнение
     *
     * @return Host
     */
    public function byRemoteHostA(): Host
    {
        $this->delegate = new RemoteHostA();
        return $this->delegate;
    }

    /**
     * Делегирует выполнение
     *
     * @return Host
     */
    public function byRemoteHostB(): Host
    {
        // Тут делегирование выполнения
        $this->delegate = new RemoteHostB(new RemoteHostA());
        return $this->delegate;
    }

    /**
     * @inheritDoc
     */
    public function setHost(string $host): void
    {
        $this->delegate->setHost($host);
    }
}
