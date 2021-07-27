<?php

namespace Rahmet\TestCoverageTask;

class SmsNotify
{
    public function send(): \Generator
    {
        yield 'preparing';
        yield 'processing';
        yield 'Payment is success';
    }
}