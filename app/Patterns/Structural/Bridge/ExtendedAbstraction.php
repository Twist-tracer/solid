<?php

namespace App\Patterns\Structural\Bridge;

/**
 * Можно расширить Абстракцию без изменения классов Реализации.
 * Например это может быть расширение легковая машина -> внедорожник
 *
 */
class ExtendedAbstraction extends Abstraction
{
    public function operation(): string
    {
        return "ExtendedAbstraction: Extended operation with:\n" .
            $this->implementation->operationImplementation();
    }
}
