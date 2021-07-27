<?php

namespace Rahmet\TestCoverageTask;

class Payment
{
    private int $amount;
    private \DateTime $created_at;

    /**
     * @throws \Exception
     */
    public function __construct(int $amount, string $datetime = 'now')
    {
        $this->amount = $amount;
        $this->created_at = new \DateTime($datetime);
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function refundLimit(): int
    {
        return $this->amount * 0.1;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->created_at;
    }
}