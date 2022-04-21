<?php

namespace App\Patterns\Architectural\VIPER;

class ButtonEntity implements ITrip
{

    public function showFrame(): void
    {
        echo "This is button" . PHP_EOL;
    }
}
