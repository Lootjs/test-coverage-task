<?php

namespace Rahmet\TestCoverageTask;

class PaymentSystem
{
    public Payment $payment;
    public string $paymentProvider;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
        $this->paymentProvider = $this->getPaymentProvider();
    }

    private function getPaymentProvider(): string
    {
        switch (true) {
            default:
            case $this->payment->getAmount() < WalletPaymentProvider::MAX_AMOUNT:
                return WalletPaymentProvider::class;

            case $this->payment->getAmount() < QpayPaymentProvider::MAX_AMOUNT:
                return QpayPaymentProvider::class;

            case $this->payment->getAmount() < BitcoinPaymentProvider::MAX_AMOUNT:
                return BitcoinPaymentProvider::class;
        }
    }
}