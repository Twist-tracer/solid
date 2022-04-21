<?php

namespace App\Patterns\Structural\ValueListHandler;

use Iterator;

/**
 * Реализация общего класса обработчика значений
 *
 * Class ValueListHandler
 * @package App\Patterns\Structural\ValueListHandler
 */
class ValueListHandler implements Iterator
{

    /**
     * Набор элементов
     *
     * @var array
     */
    private array $list;

    /**
     * Текущая позиция
     *
     * @var int
     */
    private int $position = 0;

    /**
     * Установить список значений
     *
     * @param array $list Список значений для установки
     */
    public function setList(array $list): void
    {
        // Кеширует полученные объекты
        $this->list = $list;
    }

    /**
     * Возвращает список
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->list[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return isset($this->list[$this->position]);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = 0;
    }
}
