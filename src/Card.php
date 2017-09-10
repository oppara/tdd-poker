<?php
namespace Tv\Oppara;

class Card
{
    private $suit;
    private $rank;
    public function __construct(Suit $suit, Rank $rank)
    {
        $this->suit = $suit;
        $this->rank = $rank;
    }

    public function getNotation()
    {
        return $this->rank . $this->suit;
    }

}

