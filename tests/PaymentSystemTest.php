<?php

namespace Rahmet\TestCoverageTask;

use PHPUnit\Framework\TestCase;

class PaymentSystemTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testNotifyAboutSuccessPayment()
    {
        $payment = new Payment(100, '2000-01-01 10:00:00');
        $paymentSystem = new PaymentSystem($payment);
        $this->assertEquals($payment, $paymentSystem->payment);
        $this->assertEquals('Payment is success', $paymentSystem->notifyAboutSuccessPayment('test'));
    }
}
