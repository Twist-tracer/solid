<?php

namespace App\Patterns\Structural\ServiceLocator;

use OutOfRangeException;
use InvalidArgumentException;

/**
 * Основной класс сервис-локатора
 * Class ServiceLocator
 * @package App\Patterns\Structural\ServiceLocator
 */
class ServiceLocator
{
    /**
     * @var string[][]
     */
    private array $services = [];

    /**
     * @var Service[]
     */
    private array $instantiated = [];

    /**
     * Добавление инстанса в локатор
     *
     * @param string $class
     * @param Service $service
     */
    public function addInstance(string $class, Service $service)
    {
        $this->instantiated[$class] = $service;
    }

    /**
     * Добавление класса в локатор
     *
     * @param string $class
     * @param array $params
     */
    public function addClass(string $class, array $params)
    {
        $this->services[$class] = $params;
    }

    /**
     * Проверяет наличие переденного класса или объектра класса
     * @param string $interface
     * @return bool
     */
    public function has(string $interface): bool
    {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    /**
     * Возвращает класс или сервис-локатора или создает новый объек класса, сохраняя его в локаторе
     *
     * @param string $class
     * @return Service
     */
    public function get(string $class): Service
    {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $args = $this->services[$class];

        switch (count($args)) {
            case 0:
                $object = new $class();
                break;
            case 1:
                $object = new $class($args[0]);
                break;
            case 2:
                $object = new $class($args[0], $args[1]);
                break;
            case 3:
                $object = new $class($args[0], $args[1], $args[2]);
                break;
            default:
                throw new OutOfRangeException('Too many arguments given');
        }

        if (!$object instanceof Service) {
            throw new InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instantiated[$class] = $object;

        return $object;
    }
}
