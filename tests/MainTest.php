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
        $app = new Main(3000);

        $this->assertEquals('', $app->displayCheck());
    }
}
