<?php

namespace App\Patterns\Structural\DAO;

/**
 * Реализует интерфейс доступа к данным
 *
 * Class StudentDaoImpl
 * @package App\Patterns\Structural\DAO
 */
class StudentDaoImpl implements IStudentDao
{

    /**
     * Массив объектов студентов
     *
     * @var array
     */
    private array $students;

    /**
     * StudentDaoImpl constructor.
     */
    public function __construct()
    {
        $this->students[] = new Student("Student one", 1);
        $this->students[] = new Student("Student two", 2);
        $this->students[] = new Student("Student three", 3);
    }

    /**
     * @inheritDoc
     */
    public function getAllStudents(): array
    {
        return $this->students;
    }

    /**
     * @inheritDoc
     */
    public function getStudent(int $no): Student
    {
        //
//        return $this->students[$no];
    }

    /**
     * @inheritDoc
     */
    public function updateStudent(Student $student): void
    {
        $this->students[$student->getRollNo()]->setName($student->getName());
    }

    /**
     * @inheritDoc
     */
    public function deleteStudent(Student $student): void
    {
        unset($this->students[$student->getRollNo()]);
        echo $student->getRollNo() . " deleted." . PHP_EOL;
    }
}
