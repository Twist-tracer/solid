<?php

namespace App\Patterns\Structural\CompositeEntity;

/**
 * Пример зависимого объекта
 *
 * @package App\Patterns\Structural\CompositeEntity
 */
class DependentObject1
{
    /**
     * Данные
     *
     * @var string
     */
    private string $data;

    /**
     * Установить данные для отображения
     *
     * @param string $data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }

    /**
     * Получение данных для отображения
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
}
