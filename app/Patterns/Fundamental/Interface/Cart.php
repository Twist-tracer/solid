<?php

namespace App\Patterns\Fundamental\Interface;

/**
 * Корзина
 *
 * @package App\Patterns\Fundamental\Interface
 */
class Cart
{

    /**
     * Продукты корзины
     *
     * @var array
     */
    private array $products = [];

    /**
     * Положить продукт в корзину
     *
     * @param Product $product Продукт
     */
    public function setProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    /**
     * Распечатать список продуктов
     *
     * @return void
     */
    public function printListOfProducts(): void
    {
        foreach ($this->products as $product) {
            echo $product->getname() . PHP_EOL;
        }
    }
}
