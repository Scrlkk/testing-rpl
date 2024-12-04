<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TestOperasiBilangan extends TestCase
{
    public function testTambah()
    {
        $this->assertEquals(10, 5 + 6);
    }
    public function testPengurangan()
    {
        $this->assertEquals(-2, 5 - 6);
    }
}
