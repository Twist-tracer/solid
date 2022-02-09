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
        $this->info('Handle command');

        /** @var Limit $limit */
        $limit = $limiter->limiter('sandbox')($this);

        if ($limiter->tooManyAttempts($limit->key, $limit->maxAttempts)) {
            $this->warn('Limit reached');
            return;
        }

        $limiter->hit($limit->key, $limit->decayMinutes * 60);

        $this->info('Command handled');
    }
}
