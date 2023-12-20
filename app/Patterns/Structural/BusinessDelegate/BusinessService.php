<?php

namespace App\Patterns\Structural\BusinessDelegate;

/**
 * Интерфейс бизнес-сервиса
 *
 * Interface BusinessService
 * @package App\Patterns\Structural\BusinessDelegate
 */
interface BusinessService
{
    public function doProcessing(): void;
}
