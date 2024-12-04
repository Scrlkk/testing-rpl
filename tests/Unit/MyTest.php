<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    private $errors;
    protected function setUp(): void
    {
        $this->errors = array();
        set_error_handler(array($this, "errorHandler"));
    }

    public function errorHandler($errno, $errstr, $errfile, $errline, $errcontext)
    {
        $this->errors[] = array($errno, $errstr, $errfile, $errline, $errcontext);
    }

    public function assertError($errstr, $errno)
    {
        foreach ($this->errors as $error) {
            if (
                $error["errstr"] == $errstr
                && $error["errno"] == $errno
            ) {
                return;
            }
        }
        $this->fail(
            "Error with level " . $errno . " and message '" . $errstr . "' not found in " .
            var_export($this->errors, true)
        );
    }
    public function testDoStuff()
    {
        $this->assertError("Message for the expected error", E_USER_WARNING);
    }
}
