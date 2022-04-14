<?php

namespace App\Architecture\Patterns\Behavioral\Servant;

/**
 * Реализует класс шаблона Слуга
 *
 * Class MoveServant
 * @package App\Architecture\Patterns\Behavioral\Servant
 */
class MoveServant {

    /**
     * Перемещает позицию фигуры в указанную точку
     *
     * @param Movable $serviced
     * @param Position $where
     */
    public function moveTo(Movable $serviced, Position $where): void {
        $serviced->setPosition($where);
    }

    /**
     * Переместить относительно текущей позиции
     *
     * @param Movable $serviced
     * @param int $dx
     * @param int $dy
     */
    public function moveBy(Movable $serviced, int $dx, int $dy): void {
        $dx += $serviced->getPosition()->xPosition;
        $dy += $serviced->getPosition()->yPosition;
        $serviced->setPosition(new Position($dx, $dy));
    }
}
