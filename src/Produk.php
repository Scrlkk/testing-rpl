<?php

class Produk
{
    private $hargaSatuan;
    private $jumlah;
    private $pajak;

    public function __construct($hargaSatuan, $jumlah, Pajak $pajak)
    {
        $this->hargaSatuan = $hargaSatuan;
        $this->jumlah = $jumlah;
        $this->pajak = $pajak;
    }

    public function hitungHargaTotal()
    {
        $hargaSebelumPajak = $this->hargaSatuan * $this->jumlah;
        $pajak = $this->pajak->hitungPajak($hargaSebelumPajak);
        return $hargaSebelumPajak + $pajak;
    }
}

class Pajak
{
    public function hitungPajak($hargaSebelumPajak)
    {
        return $hargaSebelumPajak * 0.1;
    }
}