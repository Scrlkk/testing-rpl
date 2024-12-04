<?php

namespace Tests\Unit;

use Average;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    protected $Average;
    public function setUp(): void
    {
        $this->Average = new Average();
    }

    public function testCalculationOfMean()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(4.4, $this->Average->mean($numbers));
    }

    public function testCalculationOfMedian()
    {
        $numbers = [3, 7, 6, 1, 5];
        $this->assertEquals(5, $this->Average->median($numbers));
    }
}
