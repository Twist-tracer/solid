<?php

namespace App\Patterns\Structural\ValueObject;

/**
 * Пример шаблона Объект-передачи / Объект-значение
 *
 * Class StudentVO
 * @package App\Patterns\Structural\ValueObject
 */
class StudentVO
{
    /**
     * @var string
     */
    private string $name;
    private int $rollNo;

    /**
     * StudentVO constructor.
     *
     * @param string $name
     * @param int $rollNo
     */
    public function __construct(string $name, int $rollNo)
    {
        $this->name = $name;
        $this->rollNo = $rollNo;
    }

    /**
     * Возвращает имя
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Установить имя
     *
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Возвращает номер студента
     *
     * @return int
     */
    public function getRollNo(): int
    {
        return $this->rollNo;
    }

    /**
     * Установить номер студента
     *
     * @param int $rollNo
     */
    public function setRollNo(int $rollNo): void
    {
        $this->rollNo = $rollNo;
    }
}
