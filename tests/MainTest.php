<?php

namespace Tests\Unit;

include 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use Rahmet\TestCoverageTask\Main;

final class MainTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMainTest()
    {
        $amount = 1000;
        $app = new Main(1_000);

        $this->assertEquals($amount, $app->payment->getAmount());
    }
}
