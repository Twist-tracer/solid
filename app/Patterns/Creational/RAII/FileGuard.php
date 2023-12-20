<?php

namespace App\Patterns\Creational\RAII;

use Mockery\Exception;

/**
 * Пример применения шаблона RAII при работе с файлом
 *
 * @package App\Patterns\Creational\RAII
 */
class FileGuard
{

    /**
     * Файл обработки
     *
     * @var false|resource
     */
    private $file;

    /**
     * Путь к файлу с локом
     *
     * @var string
     */
    private string $lockPath;

    /**
     * FileGuard constructor.
     *
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        $filePath = dirname(__FILE__) . "/" . $fileName;
        $this->lockPath = $filePath . ".lock";

        if (file_exists($this->lockPath)) {
            throw new Exception("Не удалось получить блокировку!");
        }

        $this->file = fopen($filePath, "a+");
        $lock = fopen($this->lockPath, "a");
        fclose($lock);

        ftruncate($this->file, 0); // очищаем файл
    }

    /**
     * Деструктор реализует освобождение ресурса
     */
    public function __destruct()
    {
        fclose($this->file);
        unlink($this->lockPath);
    }

    /**
     * Пишет в ресурс строку
     *
     * @param string $text
     */
    public function write(string $text)
    {
        fwrite($this->file, $text);
    }
}
