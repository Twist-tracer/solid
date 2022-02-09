<?php

namespace Tests\Feature;

use Illuminate\Cache\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Tests\TestCase;

class RateLimiterTest extends TestCase
{
    public function testOk()
    {
        $limiter = $this->app->make(RateLimiter::class);

        $limiter->for('test', function () {
            return Limit::perMinute(2)->by('test:key');
        });

        /** @var Limit $limit */
        $limit = $limiter->limiter('test')($this);

        $limiter->hit($limit->key, $limit->decayMinutes * 60);

        $this->assertFalse($limiter->tooManyAttempts($limit->key, $limit->maxAttempts));

        $limiter->hit($limit->key, $limit->decayMinutes * 60);

        $this->assertTrue($limiter->tooManyAttempts($limit->key, $limit->maxAttempts));
    }
}
