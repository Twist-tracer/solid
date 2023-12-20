<?php

namespace App\Patterns\Structural\DataMapper;

/**
 * Объект пользователь
 *
 * @package App\Patterns\Structural\DataMapper
 */
class User
{
    /**
     * Пользователь
     * @var string
     */
    private string $username;

    /**
     * Почта
     * @var string
     */
    private string $email;

    /**
     * Создает объект из временного хранилища
     *
     * @param array $state Текущий состояние
     *
     * @return User
     */
    public static function fromState(array $state): User
    {
        // validate state before accessing keys!

        return new self(
            $state['username'],
            $state['email']
        );
    }

    /**
     * User constructor.
     * @param string $username
     * @param string $email
     */
    public function __construct(string $username, string $email)
    {
        // validate parameters before setting them!
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * Получить пользователь
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Получить email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
