<?php

namespace App\Patterns\Structural\Adapter;

/**
 * Адаптер делает интерфейс Адаптируемого класса совместимым с целевым
 * интерфейсом.
 */
class Adapter extends Target
{
    /**
     * Adapter constructor.
     * @param Adaptee $adaptee Адаптируемый экземпляр
     */
    public function __construct(private Adaptee $adaptee)
    {
    }

    /**
     * Реализация метода адаптации
     * @return string
     */
    public function request(): string
    {
        return strrev($this->adaptee->specificRequest());
    }
}
