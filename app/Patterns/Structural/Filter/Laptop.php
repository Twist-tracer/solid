<?php

namespace App\Patterns\Structural\Filter;

/**
 * Объект фильтрации
 * @package App\Patterns\Structural\Filter
 */
class Laptop implements ILaptop
{
    /**
     * Процессор
     *
     * @var string
     */
    private string $processor;

    /**
     * Оперативная память
     *
     * @var int
     */
    private int $gb;

    /**
     * Операционная система
     *
     * @var string
     */
    private string $os;

    /**
     * Laptop constructor.
     *
     * @param string $processor
     * @param int $gb
     * @param string $os
     */
    public function __construct(string $processor, int $gb, string $os)
    {
        $this->processor = $processor;
        $this->gb = $gb;
        $this->os = $os;
    }

    /**
     * @inheritDoc
     */
    public function getProcessor(): string
    {
        return $this->processor;
    }

    /**
     * @inheritDoc
     */
    public function getGb(): int
    {
        return $this->gb;
    }

    /**
     * @inheritDoc
     */
    public function getOs(): string
    {
        return $this->os;
    }
}
