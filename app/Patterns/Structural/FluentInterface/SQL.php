<?php

namespace App\Patterns\Structural\FluentInterface;

/**
 * Реализует шаблон Текучий интерфейс
 *
 * @package App\Patterns\Structural\FluentInterface
 */
class SQL
{
    /**
     * Поля для обработки
     *
     * @var array
     */
    private array $fields = [];

    /**
     * Таблицы для обработки
     * @var array
     */
    private array $from = [];

    /**
     * Условия для обработки
     *
     * @var array
     */
    private array $where = [];

    /**
     * Добавляет поля для выборки
     *
     * @param array $fields Поля
     * @return $this
     */
    public function select(array $fields): SQL
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Таблица для выбора
     * @param string $table Наименование таблицы
     * @param string $alias Алиас выбираемой таблицы
     * @return $this
     */
    public function from(string $table, string $alias): SQL
    {
        $this->from[] = $table . ' AS ' . $alias;
        return $this;
    }

    /**
     * Условие выбора
     *
     * @param string $condition Условия
     * @return $this
     */
    public function where(string $condition): SQL
    {
        $this->where[] = $condition;
        return $this;
    }

    /**
     * Получить преобразованную строку
     *
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}
