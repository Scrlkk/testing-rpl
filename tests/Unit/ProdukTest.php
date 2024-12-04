<?php

namespace Tests\Unit;

use Pajak;
use PHPUnit\Framework\TestCase;
use Produk;

class ProdukTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testHitungHargaTotal()
    {
        $pajakMock = $this->createMock(Pajak::class);
        $pajakMock->expects($this->once())->method('hitungPajak')->with(10000)->willReturn(1000);

        $produk = new Produk(1000, 10, $pajakMock);

        $hargaTotal = $produk->hitungHargaTotal();
        $this->assertEquals(11000, $hargaTotal);

        $pajakStub = $this->createStub(Pajak::class);
        $pajakStub->method('hitungPajak')->willReturn(1000);
    }
}
