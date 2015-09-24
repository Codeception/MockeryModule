<?php

namespace Codeception\MockeryModule;

use Codeception\TestCase\Test as BaseTest;
use Mockery;

/**
 * Calls \Mockery::close() after the test.
 *
 * The module is not enough because it can't mark a test as failed. An exception thrown by the module actually halts tests execution.
 * To prevent this you should use this class as base for your unit tests instead of Codeception\TestCase\Test.
 * However this doesn't mean you should remove the module. It is recommended to use both.
 *
 * @author Jáchym Toušek <enumag@gmail.com>
 */
class Test extends BaseTest
{
    protected function tearDown()
    {
        parent::tearDown();
        Mockery::close();
    }
}
