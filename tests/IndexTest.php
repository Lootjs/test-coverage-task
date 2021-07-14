<?php

namespace Tests\Unit;

include 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

use Rahmet\TestCoverageTask\Str;

final class IndexTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testManTest()
    {
        $this->assertEquals(Str::setTitle('Helly', 'woman'), 'Mrs. Heely');
    }
}
