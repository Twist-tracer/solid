<?php

namespace App\Architecture\Patterns\Architectural\VIPER;

class ButtonEntity implements ITrip
{

    public function showFrame(): void
    {
        echo "This is button" . PHP_EOL;
    }
}
