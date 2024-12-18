<?php

class Card
{
    private $number;
    private $suit;
    public function __construct($number, $suit)
    {
        $this->number = $number;
        $this->suit = $suit;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getSuit()
    {
        return $this->suit;
    }

    public function isInMatchingSet(Card $card)
    {
        return ($this->getNumber() == $card->getNumber());
    }
}