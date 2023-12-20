<?php

namespace App\Patterns\Fundamental\Interface;

/**
 * Реализует шаблон Интерфейс
 *
 * @package App\Patterns\Fundamental\Interface
 */
class InterfacePattern
{

    /**
     * Заказать все продукты
     * @param string $additionalProduct
     */
    static function orderAllProducts(string $additionalProduct)
    {
        // Тут может быть реализован большой слой бизнес-логики
        $currentProducts = [
            "product_1",
            "product_2",
            "product_3",
            "product_4",
            $additionalProduct
        ];

        $cart = new Cart();

        foreach ($currentProducts as $name) {
            $new = new Product();
            $new->setName($name);
            $cart->setProduct($new);
        }

        $cart->printListOfProducts();
    }
}
