<?php

namespace App\Patterns\Structural\Adapter;

/**
 * Адаптер делает интерфейс Адаптируемого класса совместимым с целевым
 * интерфейсом.
 */
class Adapter extends Target
{
    /**
     * Адаптируемый экземпляр
     *
     * @var Adaptee
     */
    private $adaptee;

    /**
     * Adapter constructor.
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * Реализация метода адаптации
     * @return string
     */
    public function request(): string
    {
        return "Adapter: (TRANSLATED) " . strrev($this->adaptee->specificRequest());
    }
}
