<?php

namespace Rahmet\TestCoverageTask;

use PHPUnit\Framework\TestCase;

class SmsNotifyTest extends TestCase
{

    public function testSend()
    {
        $notify = new SmsNotify();
        $generator = $notify->send();

        $i = 0;
        foreach ($generator as $value) {
            switch ($i) {
                case 0:
                    $this->assertEquals('preparing', $value);
                    break;
                case 1:
                    $this->assertEquals('processing', $value);
                    break;
                case 2:
                    $this->assertEquals('Payment is success', $value);
                    break;
            }

            $i++;
        }
    }
}
