<?php

namespace App\Patterns\Architectural\PAC;

class SimpleDateFormat
{
    public function format(string $date): string
    {
        return "Форматируем: $date" . PHP_EOL;
    }
}
