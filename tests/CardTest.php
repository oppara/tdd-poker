<?php
use PHPUnit\Framework\TestCase;
use Tv\Oppara\Card;
use Tv\Oppara\Suit;
use Tv\Oppara\Rank;

class CardTest extends TestCase
{

    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * @test
     * @dataProvider cardProvider
     */
    public function カードの文字列表記が取得できること($suit, $rank, $expected)
    {
        $card = new Card($suit, $rank);
        $this->assertEquals($expected, $card->getNotation());
    }

    public function cardProvider()
    {
        return [
            [Suit::SPADE(), Rank::THREE(), '3♠'],
            [Suit::HEART(), Rank::JACK(), 'J♥'],
        ];
    }
}



