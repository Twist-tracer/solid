<?php

declare(strict_types=1);

namespace App\Patterns\Behavioral\NullObject;

class NullLogger implements Logger
{
    public function log(string $str)
    {
        // do nothing
    }
}
