<?php

namespace App\Patterns\Structural\CompositeEntity;

/**
 * Класс клинта, который использует составной объект
 *
 * @package App\Patterns\Structural\CompositeEntity
 */
class Client
{

    /**
     * Составной объект
     *
     * @var CompositeEntity
     */
    private CompositeEntity $compositeEntity;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->compositeEntity = new CompositeEntity();
    }

    /**
     * Вывести элементы составного объекта
     */
    public function printData(): void
    {
        foreach ($this->compositeEntity->getData() as $field) {
            echo $field . PHP_EOL;
        }
    }

    /**
     * Установить элементы составного объекта
     *
     * @param string $data1 Свойства
     * @param string $data2 Свойства №2
     */
    public function setData(string $data1, string $data2): void
    {
        $this->compositeEntity->setData($data1, $data2);
    }
}
