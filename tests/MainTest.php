<?php

namespace Rahmet\TestCoverageTask;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{

    public function testSendCheck()
    {
        $app = new Main(1_000, '2021-07-30 10:00:00');

        $this->assertEquals(null, $app->sendCheck());
    }

    public function testDisplayCheck()
    {
        $app = new Main(1_000, '2021-07-30 10:00:00');
        $res = <<<HEREDOC
        Вы выполнили платеж на сумму: 1000
        Возможная сумма возврата: 100
        Платежная система вашей операции: Rahmet\TestCoverageTask\WalletPaymentProvider
HEREDOC;

        $this->assertEquals($res, $app->displayCheck());
    }
}
