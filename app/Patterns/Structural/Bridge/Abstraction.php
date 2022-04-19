<?php

namespace App\Patterns\Structural\Bridge;

/**
 * Абстракция устанавливает интерфейс для «управляющей» части двух иерархий
 * классов. Она содержит ссылку на объект из иерархии Реализации и делегирует
 * ему всю настоящую работу.
 */
class Abstraction
{
    /**
     * Конкретная реализация
     *
     * @var Implementation
     */
    protected Implementation $implementation;

    /**
     * Abstraction constructor.
     * @param Implementation $implementation
     */
    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * Делегируем выполнение операции конкретно реализации
     *
     * @return string
     */
    public function operation(): string
    {
        return "Abstraction: Base operation with:\n" .
            $this->implementation->operationImplementation();
    }
}
