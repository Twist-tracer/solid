<?php

namespace App\Architecture\Patterns\Architectural\VIPER;

/**
 * Поездка, которая содержит список путевых точек, которые являются остановками в поездке.
 *
 * Class TripEntity
 * @package App\Architecture\Patterns\Architectural\VIPER
 */
class TripEntity implements ITrip
{
    private string $body;

    public function __construct(string $body)
    {
        $this->body = $body;
    }

    /** Отображает данные  */
    public function showFrame(): void
    {
        echo $this->body . PHP_EOL;
    }
}
