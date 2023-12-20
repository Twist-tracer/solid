<?php

namespace App\Patterns\Fundamental\Interface;

/**
 * @package App\Patterns\Fundamental\Interface
 */
class Product
{

    /**
     * Продукт
     *
     * Название продукта
     *
     * @var string
     */
    private string $name = "";

    /**
     * Установить название продукта
     *
     * @param string $name Название продукта
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Получить название
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
