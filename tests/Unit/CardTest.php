<?php

namespace Tests\Unit;

use Card;
use PHPUnit\Framework\TestCase;

class CardTest extends TestCase
{
    /**
     * A basic unit test example.
     */

    private $card;
    public function setUp(): void
    {
        $this->card = new Card(4, "spades");
    }
    public function testGetNumber()
    {
        $actualNumber = $this->card->getNumber();
        $this->assertEquals(4, $actualNumber, `Number should be <4> `);
    }

    public function testGetSuit()
    {
        $actualSuit = $this->card->getSuit();
        $this->assertEquals("spades", $actualSuit, `Suit should be <spades> `);
    }

    public function testInMatchingSet()
    {
        $matchingCard = new Card(4, "hearts");
        $this->assertTrue($this->card->isInMatchingSet($matchingCard));
    }

    public function testNotInMatchingSet()
    {
        $matchingCard = new Card(5, "hearts");
        $this->assertFalse($this->card->isInMatchingSet($matchingCard));
    }
}
