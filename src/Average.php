<?php

class Average
{
    public function mean(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }

    public function median(array $numbers)
    {
        sort($numbers);
        $size = count($numbers);
        if ($size % 2) {
            return $numbers[$size / 2];
        } else {
            return $this->mean(

                array_slice($numbers, ($size / 2) - 1, 2)
            );
        }
    }
}