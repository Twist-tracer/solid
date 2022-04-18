<?php

namespace App\Patterns\Fundamental\ImmutableObject;

/**
 * Класс денежных средств
 *
 * @package App\Patterns\Fundamental\ImmutableObject
 */
final class ImmutableMoney
{
    private float $amount;

    /**
     * Money constructor.
     *
     * @param float $amount Объем денежных средств
     */
    public function __construct(float $amount)
    {
        $this->amount = $amount;

    }

    /**
     * Получить объем денежных средств
     *
     * @return float
     */
    final public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Добавить к объему
     *
     * @param float $amount Добавляемый объем
     *
     * @return self
     */
    final public function add(float $amount): self
    {
        return new self($this->amount + $amount);
    }
}
