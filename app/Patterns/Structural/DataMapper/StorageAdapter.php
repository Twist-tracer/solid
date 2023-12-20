<?php

namespace App\Patterns\Structural\DataMapper;

/**
 * Хранилище свойств
 *
 * Class StorageAdapter
 * @package App\Patterns\Structural\DataMapper
 */
class StorageAdapter
{

    /**
     * Данные
     *
     * @var array
     */
    private array $data = [];

    /**
     * Помещает данные в хранилище
     *
     * StorageAdapter constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Возвращает данные по идентификатору
     *
     * @param int $id
     *
     * @return array|null
     */
    public function find(int $id): ?array
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
}
