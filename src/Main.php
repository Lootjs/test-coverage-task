<?php

namespace Rahmet\TestCoverageTask;

class Main
{
    public Payment $payment;
    public PaymentSystem $paymentSystem;

    public function __construct(int $amount)
    {
        $this->payment = new Payment($amount);
        $this->paymentSystem = new PaymentSystem($this->payment);
    }

    public function displayCheck()
    {
        return <<<HEREDOC
        Вы выполнили платеж на сумму: {$this->payment->getAmount()}
        Возможная сумма возврата: {$this->payment->refundLimit()}
        Платежная система вашей операции: {$this->paymentSystem->paymentProvider}
HEREDOC;
    }
}