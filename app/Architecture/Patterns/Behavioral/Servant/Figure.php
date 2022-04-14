<?php

namespace App\Architecture\Patterns\Behavioral\Servant;

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
