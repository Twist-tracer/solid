<?php

namespace App\Patterns\Creational\Multiton;

/**
 * Пример работы с шаблоном проектирования Мультитон
 *
 * @package App\Patterns\Creational\Multiton
 */
class DB
{

    /**
     * Массив объектов Одиночек
     *
     * @var array
     */
    private static array $instances = [];

    /**
     * Наименование базы данных
     * @var string
     */
    private string $dbName;

    /**
     * Конструктор делаем приватным
     *
     * DB constructor.
     * @param string $dbName Наименование базы
     */
    private function __construct(string $dbName)
    {
        $this->dbName = $dbName;
    }

    /**
     * Инициализация объекта из пула одиночек
     *
     * @param string $instanceKey Ключ объекта
     *
     * @return static
     */
    public static function getInstance(string $instanceKey): self
    {
        if (empty(self::$instances[$instanceKey])) {
            self::$instances[$instanceKey] = new self($instanceKey);
        }
        return self::$instances[$instanceKey];
    }

    /**
     * Получить наименование базы
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->dbName;
    }
}
