<?php

namespace App\Patterns\Fundamental\ImmutableInterface;

use Carbon\Exceptions\UnknownMethodException;

/**
 * Класс, реализующий неизменяемый интерфейс
 *
 * @package App\Patterns\Fundamental\ImmutableInterface
 */
class ImmutablePoint extends Point implements IImmutablePoint
{

    /**
     * @inheritDoc
     */
    public function setX(int $x): void
    {
        // Определяет метод
        throw new UnknownMethodException(__METHOD__);
    }

    /**
     * @inheritDoc
     */
    public function setY(int $y): void
    {
        // Определяет метод
        throw new UnknownMethodException(__METHOD__);
    }
}
