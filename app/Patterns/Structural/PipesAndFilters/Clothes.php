<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Класс одежды
 *
 * Class Clothes
 *
 * @package App\Patterns\Structural\PipesAndFilters
 */
class Clothes
{
    /**
     * Нужна ли глажка
     */
    private bool $isIron = false;

    /**
     * Плечики
     */
    private bool $isShoulder = false;

    /**
     * Нужно сшить
     */
    private bool $isThreadNeed = false;

    public function isProcessable(): bool
    {
        return $this->isThreadNeed() || $this->isIron() || $this->isShoulders();
    }

    /**
     * Пометить глажку
     */
    public function setIron(): self
    {
        $this->isIron = true;

        return $this;
    }

    /**
     * Нужна ли глажка
     */
    public function isIron(): bool
    {
        return $this->isIron;
    }

    /**
     * Пометить плечики
     */
    public function setShoulders(): self
    {
        $this->isShoulder = true;

        return $this;
    }

    /**
     * Нужны ли плечики
     */
    public function isShoulders(): bool
    {
        return $this->isShoulder;
    }

    /**
     * Пометить шитье
     */
    public function setThreadNeed(): self
    {
        $this->isThreadNeed = true;

        return $this;
    }

    /**
     * Нужно ли шитье
     */
    public function isThreadNeed(): bool
    {
        return $this->isThreadNeed;
    }
}
