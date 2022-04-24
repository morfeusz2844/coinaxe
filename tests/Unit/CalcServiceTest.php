<?php

namespace Tests\Unit;

use App\Services\CountTheSumService;
use PHPUnit\Framework\TestCase;

class CalcServiceTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function testCalc(): void
    {
        $calcService = new CountTheSumService();
        self::assertSame(4.0, $calcService->calc(2, 2));
    }
}
