<?php

namespace App\Patterns\Architectural\NakedObject;

/**
 * Класс с контейнерами простых объектов
 *
 * Class SimpleObjects
 * @package App\Architecture\Patterns\Architectural\NakedObject
 */
class SimpleObjects
{

    /**
     * Контейнер простых объектов
     *
     * @var array
     */
    private static array $container = [];

    /**
     * Получить объект по имени
     *
     * @param string $name
     * @return SimpleObject
     */
    public static function getByName(string $name): SimpleObject
    {
        if (!isset(self::$container[$name])) {
            self::$container[$name] = new SimpleObject();
        }

        return self::$container[$name];
    }
}
