<?php

namespace App\Patterns\Structural\Broker;

/**
 * Класс сервера
 *
 * Class Server
 * @package App\Patterns\Structural\Broker
 */
class Server implements OperationsInterface
{
    /**
     * @inheritDoc
     */
    public function addIntegers(int $varOne, int $varTwo): int
    {
        return $varOne + $varTwo;
    }

    /**
     * @inheritDoc
     */
    public function getLength(string $str): int
    {
        return strlen($str);
    }
}
