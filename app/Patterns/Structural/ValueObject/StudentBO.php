<?php

namespace App\Patterns\Structural\ValueObject;

/**
 * Реализует бизнес-слой, работает с объектами-значением
 *
 * Class StudentBO
 * @package App\Patterns\Structural\ValueObject
 */
class StudentBO
{
    /**
     * Работает как слой БД
     * @var array
     */
    private array $students;

    public function __construct()
    {
        $this->students[] = new StudentVO("Robert", 0);
        $this->students[] = new StudentVO("John", 0);
    }

    /**
     * Удаляет из списка
     *
     * @param StudentVO $student
     */
    public function deleteStudent(StudentVO $student): void
    {
        unset($this->students[$student->getRollNo()]);
        echo "Student roll no {$student->getRollNo()} deleted from list" . PHP_EOL;
    }

    /**
     * Возвращает всех студентов
     *
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * Обновляет студента
     * @param StudentVO $student Студент
     */
    public function updateStudent(StudentVO $student): void
    {
        $this->students[$student->getRollNo()]->setName($student->getName());
    }

    /**
     * Возвращает студента
     */
    public function getStudent(int $no): StudentVO
    {
        return $this->students[$no];
    }
}
