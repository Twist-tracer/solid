<?php

namespace Tests\Unit\Patterns;

use App\Architecture\Patterns\Fundamental\PropertyContainer\Movie;
use PHPUnit\Framework\TestCase;

class PropertyContainerTest extends TestCase
{
    public function testGetSetUnset(): void
    {
        $movie = new Movie();

        $this->assertNull($movie->title);

        $movie->title = 'Мстители';

        $this->assertEquals($movie->title, 'Мстители');

        unset($movie->title);

        $this->assertNull($movie->title);
    }
}
