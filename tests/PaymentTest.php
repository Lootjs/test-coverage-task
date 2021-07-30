<?php

namespace Rahmet\TestCoverageTask;

use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testGetCreatedAt()
    {
        $payment = new Payment(100, '2000-01-01 00:00:00');
        $datetime = new \DateTime('2000-01-01 00:00:00');
        $this->assertEquals($datetime, $payment->getCreatedAt());
    }

    /**
     * @throws \Exception
     */
    public function testRefundLimit()
    {
        $payment = new Payment(100, 'now');
        $this->assertEquals(10, $payment->refundLimit());
    }

    /**
     * @throws \Exception
     */
    public function testGetAmount()
    {
        $payment = new Payment(100, 'now');
        $this->assertEquals(100, $payment->getAmount());
    }
}
