<?php

namespace App\Patterns\Structural\BusinessDelegate;

/**
 * Реализуем конкретный сервис
 *
 * Class ConcreteService1
 * @package App\Patterns\Structural\BusinessDelegate
 */
class ConcreteService2 implements BusinessService
{
    public function doProcessing(): void
    {
        echo "Processing task by invoking ConcreteService2" . PHP_EOL;
    }
}
