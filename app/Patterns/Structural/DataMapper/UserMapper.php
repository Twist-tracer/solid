<?php

namespace App\Patterns\Structural\DataMapper;

use InvalidArgumentException;

/**
 * Дата-маппер для объекта пользователя
 *
 * @package App\Patterns\Structural\DataMapper
 */
class UserMapper
{

    /**
     * Агрегированный объект хранилища
     *
     * @var StorageAdapter
     */
    private StorageAdapter $adapter;

    /**
     * UserMapper constructor.
     * @param StorageAdapter $storage Хранилище
     */
    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     * Идет пользователя во временном хранилище по идентификатору и возвращает найденный объект.
     * В основном такая логика используется в шаблоне Репозиторий.
     * Однако важная часть реализации в mapRowToUser() ниже, она создает бизнес-объект использую данные из постоянного
     * хранилища.
     *
     * @param int $id Идентификатор пользователя
     * @return User
     */
    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    /**
     * Маппит поля хранилища в объект
     *
     * @param array $row Набор свойств для объекта
     * @return User
     */
    private function mapRowToUser(array $row): User
    {
        return User::fromState($row);
    }
}
