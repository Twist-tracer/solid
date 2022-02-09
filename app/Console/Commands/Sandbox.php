<?php

namespace App\Console\Commands;

use Illuminate\Cache\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Console\Command;

class Sandbox extends Command
{
    protected $signature = 'sandbox';

    protected $description = 'Command for tests';

    public function handle(RateLimiter $limiter): void
    {
    }
}
