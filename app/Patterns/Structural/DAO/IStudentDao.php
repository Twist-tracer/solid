<?php

namespace App\Patterns\Structural\DAO;

/**
 * Определяем интерфейс для шаблона доступа к данным
 * @package App\Patterns\Structural\DAO
 */
interface IStudentDao
{

    /**
     * Возвращает массив объектов значений
     * @return Student[]
     */
    public function getAllStudents(): array;

    /**
     * Получить студента
     * @param int $no Номер студента
     *
     * @return Student
     */
    public function getStudent(int $no): Student;

    /**
     * Обновить студента
     *
     * @param Student $student
     */
    public function updateStudent(Student $student): void;

    /**
     * Удалить студента
     * @param Student $student
     */
    public function deleteStudent(Student $student): void;
}
