<?php


class blackjack{

 public $score = 0;
 public $name = "player";
 const MINIMUM = 1;
 const MAXIMUM = 11;
 const Blackjack_MAX = 21;

    public function Hit() : int
    {
        $hit = rand(self::MINIMUM, self::MAXIMUM);

    }


}