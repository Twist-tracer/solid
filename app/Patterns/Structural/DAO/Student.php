<?php

namespace App\Patterns\Structural\DAO;

/**
 * Конкретный объект-значения
 *
 * @package App\Patterns\Structural\DAO
 */
class Student
{

    /**
     * Имя объекта
     * @var string
     */
    private string $name;

    /**
     * Свойство объекта значения
     * @var int
     */
    private int $no;

    /**
     * Student constructor.
     * @param string $name
     * @param int $rollNo
     */
    public function __construct(string $name, int $rollNo)
    {
        $this->name = $name;
        $this->no = $rollNo;
    }

    /**
     * Возвращает наименование
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Установить наименование
     *
     * @param string $name Имя
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Возвращает
     * @return int
     */
    public function getRollNo(): int
    {
        return $this->no;
    }

    /**
     * Установить свойство номера
     *
     * @param int $rollNo
     */
    public function setRollNo(int $rollNo): void
    {
        $this->no = $rollNo;
    }
}
