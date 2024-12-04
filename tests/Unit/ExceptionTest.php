<?php declare(strict_types=1);

namespace Tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
    }
}
