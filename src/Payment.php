<?php

namespace Rahmet\TestCoverageTask;

class Payment
{
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function refundLimit(): int
    {
        return $this->amount * 0.1;
    }
}