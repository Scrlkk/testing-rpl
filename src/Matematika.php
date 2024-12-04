<?php

class Matematika
{
    public static function pangkatBilangan($bilanganBasic, $bilanganExponen)
    {
        $nilaiSekarang = 1;
        for ($i = 1; $i <= $bilanganExponen; $i++) {
            $nilaiSekarang *= $bilanganBasic * $bilanganBasic;
        }
        return $nilaiSekarang;
    }
}