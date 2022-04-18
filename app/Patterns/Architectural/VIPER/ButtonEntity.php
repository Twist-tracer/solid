<?php

namespace App\Patterns\Architectural\VIPER;

use App\Patterns\Architectural\VIPER\ITrip;

class ButtonEntity implements ITrip
{

    public function showFrame(): void
    {
        echo "This is button" . PHP_EOL;
    }
}
