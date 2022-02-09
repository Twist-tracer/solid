<?php

namespace App\Providers;

use App\Console\Commands\Sandbox;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class RateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->configureSandboxLimiter();
    }

    protected function configureSandboxLimiter(): void
    {
        RateLimiter::for('sandbox', function (Sandbox $command) {
            return Limit::perMinute(3)->by($command->getName());
        });
    }
}
