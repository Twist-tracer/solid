<?php

namespace App\Architecture\Patterns\Architectural\VIPER;

/**
 * Приложение содержит класс DataModel, содержащий список поездок.
 * Class DataModel
 * @package App\Architecture\Patterns\Architectural\VIPER
 */
class DataModel
{

    /**
     * Список поездок
     *
     * @var array
     */
    public array $trips = [];

    public function addTrip(ITrip $trip)
    {
        $this->trips[] = $trip;
    }
}
