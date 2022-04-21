<?php

namespace App\Patterns\Structural\PipesAndFilters;

/**
 * Класс одежды
 *
 * Class Clothes
 * @package App\Patterns\Structural\PipesAndFilters
 */
class Clothes
{
    /**
     * Нужна ли глажка
     *
     * @var bool
     */
    private bool $isIron = false;

    /**
     * Плечики
     *
     * @var bool
     */
    private bool $isShoulder = false;

    /**
     * Нужно сшить
     *
     * @var bool
     */
    private bool $isThreadNeed = false;

    public function isDirty(): bool
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
     * @return bool
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
     *
     * @return bool
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
     * @return bool
     */
    public function isThreadNeed(): bool
    {
        return $this->isThreadNeed;
    }
}
