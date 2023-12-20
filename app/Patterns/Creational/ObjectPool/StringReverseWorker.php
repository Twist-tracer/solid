<?php

declare(strict_types=1);

namespace App\Patterns\Creational\ObjectPool;

use DateTime;

/**
 * Объекта объектного пула
 *
 * @package App\Patterns\Creational\ObjectPool
 */
class StringReverseWorker
{
    /**
     * Свойство
     *
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * StringReverseWorker constructor.
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * Выполняет какое-то действие над строкой
     *
     * @param string $text Строка
     * @return string
     */
    public function run(string $text)
    {
        return strrev($text);
    }
}
