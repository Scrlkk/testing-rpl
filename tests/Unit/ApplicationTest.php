<?php

namespace Tests\Unit;

use Application;
use Logger;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testThatRunLogsApplicationStart()
    {

        $mock = $this->createMock(Logger::class);
        $mock->expects($this->once())->method('log')->with('Application has started');

        $app = new Application();
        $app->run($mock);
    }
}
