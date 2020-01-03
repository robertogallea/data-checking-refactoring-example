<?php


namespace tests;


use App\NumberChecker;
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkFalse
     */
    public function it_returns_false($number)
    {
        $checks = new NumberChecker();

        $this->assertFalse($checks->execute($number));
    }

    public function checkFalse()
    {
        return [
            [2],
            [101],
            [-5],
            [1223],
        ];
    }

    /**
     * @test
     * @dataProvider checkTrue
     */
    public function it_returns_true($number)
    {
        $checks = new NumberChecker();

        $this->assertTrue($checks->execute($number));
    }

    public function checkTrue()
    {
        return [
            [3],
            [111],
            [99],
            [999],
        ];
    }
}