<?php

namespace App\Patterns\Structural\CompositeEntity;

/**
 * Реализует шаблон Составной объект
 *
 * @package App\Patterns\Structural\CompositeEntity
 */
class CompositeEntity
{
    /**
     * Объект общего назначения
     *
     * @var CoarseGrainedObject
     */
    private CoarseGrainedObject $cgo;

    /**
     * CompositeEntity constructor.
     */
    public function __construct()
    {
        $this->cgo = new CoarseGrainedObject();
        // Тут можно использовать несколько независимых объектов общего назначения
    }

    /**
     * Устанавливает данные
     *
     * @param string $data1 Параметры управляемых объектов
     * @param string $data2 Параметры управляемых объектов
     */
    public function setData(string $data1, string $data2): void
    {
        $this->cgo->setData($data1, $data2);
    }

    /**
     * Получить данные составного шаблона
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->cgo->getData();
    }
}
