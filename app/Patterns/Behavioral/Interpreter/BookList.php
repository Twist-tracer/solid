<?php

namespace App\Patterns\Behavioral\Interpreter;

/**
 *  Работа со хранилищем книг
 *
 * Class BookList
 * @package App\Patterns\Behavioral\Interpreter
 */
class BookList
{
    private $books = array();
    private $bookCount = 0;

    public function __construct()
    {
    }

    /**
     * Возвращает количество книг
     *
     * @return int
     */
    public function getBookCount()
    {
        return $this->bookCount;
    }

    /**
     * Устанавливает количество книг
     *
     * @param $newCount
     */
    private function setBookCount($newCount)
    {
        $this->bookCount = $newCount;
    }

    /**
     * Возвращает книгу по порядковому номеру
     *
     * @param $bookNumberToGet
     * @return mixed|null
     */
    public function getBook($bookNumberToGet)
    {
        if ((is_numeric($bookNumberToGet)) &&
            ($bookNumberToGet <= $this->getBookCount())) {
            return $this->books[$bookNumberToGet];
        } else {
            return NULL;
        }
    }

    /**
     * Добавляет в хранилище книгу
     *
     * @param Book $book_in
     * @return int
     */
    public function addBook(Book $book_in)
    {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book_in;
        return $this->getBookCount();
    }

    /**
     * Удаляет книгу из хранилища
     *
     * @param Book $book_in
     * @return int
     */
    public function removeBook(Book $book_in)
    {
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
            if ($book_in->getAuthorAndTitle() ==
                $this->books[$counter]->getAuthorAndTitle()) {
                for ($x = $counter; $x < $this->getBookCount(); $x++) {
                    $this->books[$x] = $this->books[$x + 1];
                }
                $this->setBookCount($this->getBookCount() - 1);
            }
        }
        return $this->getBookCount();
    }
}
