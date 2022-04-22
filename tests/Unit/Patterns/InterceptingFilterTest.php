<?php

namespace Tests\Unit\Patterns;

use App\Patterns\Structural\InterceptingFilter\Request;
use App\Patterns\Structural\InterceptingFilter\RequestHandler;
use App\Patterns\Structural\InterceptingFilter\Response;
use PHPUnit\Framework\TestCase;

/**
 * Перехватывающий фильтр
 */
class InterceptingFilterTest extends TestCase
{
    public function testInterceptingFilter(): void
    {
        $output = <<<'EOD'
Debugging filter run
Execute processor filter
Main request handler run

EOD;

        $this->expectOutputString($output);

        (new RequestHandler())->processRequest(new Request(), new Response());
    }
}
