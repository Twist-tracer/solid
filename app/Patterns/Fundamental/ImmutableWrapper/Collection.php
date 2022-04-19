<?php

namespace App\Patterns\Fundamental\ImmutableWrapper;

/**
 * Коллекция объектов
 *
 * @package App\Patterns\Fundamental\ImmutableWrapper
 */
class Collection
{
    /**
     * Объекты
     *
     * @var array
     */
    protected array $elements = [];

    /**
     * Collection constructor.
     *
     * @param array $elements Массив объектов
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * Добавляет элемент в коллекцию
     *
     * @param mixed $element Элемент к добавлению
     */
    public function add($element): void
    {
        $this->elements[] = $element;
    }

    /**
     * Получить элемент по ключу
     *
     * @param mixed $key Ключ элемента коллекции
     *
     * @return mixed|null
     */
    public function get($key)
    {
        return $this->elements[$key] ?? null;
    }
}
