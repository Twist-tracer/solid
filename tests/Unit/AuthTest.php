<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Gate;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use DatabaseMigrations;

    public function testGates(): void
    {
        /** @var User $user */
        $user = User::factory()->create(['id' => 1]);
        $user2 = User::factory()->create(['id' => 2]);

        Gate::define('run-test', function (User $user) {
            return $user->id === 1;
        });

        $this->assertTrue($user->can('run-test'));
        $this->assertTrue($user2->cannot('run-test'));
    }

    public function testPolicies(): void
    {
        /** @var User $user */
        $user = User::factory()->create(['id' => 1]);

        $this->actingAs($user);

        $this->assertTrue($user->can('view-any', User::class));
        $this->assertTrue($user->cannot('create', User::class));
    }
}
