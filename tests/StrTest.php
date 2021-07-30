<?php

namespace Rahmet\TestCoverageTask;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{

    public function testSetTitle()
    {
        $this->assertEquals('Mr. Lut', Str::setTitle('Lut', 'man'));
        $this->assertEquals('Mrs. Helly', Str::setTitle('Helly', 'woman'));
    }
}
