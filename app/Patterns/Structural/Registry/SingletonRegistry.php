<?php

namespace App\Patterns\Structural\Registry;

/**
 * Реализация шаблона Одиночку-реестра
 *
 * @package App\Patterns\Structural\Registry
 */
class SingletonRegistry
{
    /**
     * Единственный объект реестра
     *
     * @var null|SingletonRegistry
     */
    static private ?SingletonRegistry $instance = null;

    /**
     * Реестра объектов
     *
     * @var array
     */
    private array $registry = [];

    /**
     * Получаем ссылку на одиночку
     *
     * @return SingletonRegistry|null
     */
    static public function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * Устанавливает объект по ключу
     *
     * @param $key
     * @param $object
     */
    static public function set($key, $object)
    {
        self::getInstance()->registry[$key] = $object;
    }

    /**
     * Получает объект по ключу из реестра
     *
     * @param $key
     * @return mixed
     */
    static public function get($key)
    {
        return self::getInstance()->registry[$key];
    }

    private function __wakeup()
    {
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}
