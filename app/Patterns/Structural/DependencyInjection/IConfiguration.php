<?php

namespace App\Patterns\Structural\DependencyInjection;

/**
 * Интерфейс, определяющий методы сервиса
 *
 * Class DatabaseConfiguration
 * @package App\Patterns\Structural\DependencyInjection
 */
interface IConfiguration
{

    /**
     * @return string
     */
    public function getHost(): string;

    /**
     * @return int
     */
    public function getPort(): int;

    /**
     * @return string
     */
    public function getUsername(): string;

    /**
     * @return string
     */
    public function getPassword(): string;
}
