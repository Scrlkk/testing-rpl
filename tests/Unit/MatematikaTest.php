<?php

namespace Tests\Unit;

use Matematika;
use PHPUnit\Framework\TestCase;

class MatematikaTest extends TestCase
{
    public function testpositifSemua()
    {
        $hasilPangkat = Matematika::pangkatBilangan(2, 3);
        $this->assertEquals(8, $hasilPangkat);
    }

    public function testNegatifPositif()
    {
        $hasilPangkat = Matematika::pangkatBilangan(-3, 2);
        $this->assertEquals(9, $hasilPangkat);
    }

    public function testPositifNegatif()
    {
        $hasilPangkat = Matematika::pangkatBilangan(4, -2);
        $this->assertEquals(1 / 16, $hasilPangkat);
    }

    public function testInputNgawi()
    {
        $hasilPangkat = Matematika::pangkatBilangan("a", 4);
        $this->assertEquals(10, $hasilPangkat);
    }
}
