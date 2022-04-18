<?php

namespace App\Patterns\Behavioral\Servant;

use App\Patterns\Behavioral\Servant\Movable;
use App\Patterns\Behavioral\Servant\Position;

class Figure implements Movable {

    /**
     * @var Position
     */
    protected Position $p;

    /**
     * @inheritDoc
     */
    public function setPosition(Position $p): void {
        $this->p = $p;
    }

    /**
     * @inheritDoc
     */
    public function getPosition(): Position {
        return $this->p;
    }
}
