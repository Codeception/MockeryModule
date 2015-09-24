<?php

namespace Codeception\Module;

use Codeception\Module;
use Codeception\TestCase;

/**
 * Integrates [Mockery](https://github.com/padraic/mockery) into Codeception tests.
 * 
 * Mockery is a simple yet flexible PHP mock object framework for use in unit testing.
 *
 * ## Status
 *
 * * Maintainer: **enumag**
 * * Stability: **stable**
 *
 * ## Example (`unit.suite.yml`)
 * 
 *     modules:
 *        enabled: [Mockery]
 * 
 * @author Jáchym Toušek <enumag@gmail.com>
 */
class Mockery extends Module
{
    /** @var bool Run mockery expectations after test or not */
    private $assert_mocks = true;

    public function _after(TestCase $test)
    {
        if ($this->assert_mocks) {
            \Mockery::close();
        } else {
            \Mockery::getContainer()->mockery_close();
            \Mockery::resetContainer();
        }
    }

    public function _failed(TestCase $test, $fail)
    {
        $this->assert_mocks = false;
    }
}
