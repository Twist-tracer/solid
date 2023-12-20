<?php

namespace App\Patterns\Structural\DependencyInjection;

/**
 * Объект DatabaseConfiguration внедряется в DatabaseConnection и последний получает всё, что ему необходимо из переменной $ config.
 * Без DI, конфигурация будет создана непосредственно в Connection, что не очень хорошо для тестирования и расширения Connection,
 * так как связывает эти классы напрямую.
 *
 * Class DatabaseConfiguration
 * @package App\Patterns\Structural\DependencyInjection
 */
class DatabaseConfiguration implements IConfiguration
{
    private string $host;
    private int $port;
    private string $username;
    private string $password;

    public function __construct(string $host, int $port, string $username, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @inheritDoc
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @inheritDoc
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @inheritDoc
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getPassword(): string
    {
        return $this->password;
    }
}
