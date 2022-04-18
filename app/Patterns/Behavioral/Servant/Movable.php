<?php

namespace App\Patterns\Behavioral\Servant;

use App\Patterns\Behavioral\Servant\Position;

/**
 * Интерфейс реализует методы работы с шаблоном Слуга
 * Interface Movable
 * @package App\Architecture\Patterns\Behavioral\Servant
 */
interface Movable {

    /**
     * Установить позицию
     *
     * @param Position $p Новая позиция
     *
     * @return void
     */
    public function setPosition(Position $p): void;

    /**
     * Получить позицию
     *
     * @return Position
     */
    public function getPosition(): Position;

}
