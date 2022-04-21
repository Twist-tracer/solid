<?php

namespace App\Patterns\Structural\Adapter;

/**
 * Целевой класс объявляет интерфейс, с которым может работать клиентский код.
 */
class Target
{
    public function request(): string
    {
        return "The default target's behavior";
    }
}
