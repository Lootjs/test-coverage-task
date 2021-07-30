<?php

namespace Rahmet\TestCoverageTask;

use PHPUnit\Framework\TestCase;

class PushNotifyTest extends TestCase
{

    public function testSend()
    {
        $notify = new PushNotify();
        $this->assertEquals('Payment is success', $notify->send());
    }
}
