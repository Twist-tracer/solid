<?php

namespace App\Patterns\Fundamental\Delegation;

/**
 * Абстракный делегат
 *
 * @package App\Patterns\Fundamental\Delegation
 */
abstract class Host
{

    /**
     * Хост
     *
     * @var string
     */
    protected string $host;

    abstract function getHost(): string;

    /**
     * @inheritDoc
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }
}
