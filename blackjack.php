<?php


class blackjack{

 public $score = 0;
 public $name = "player";
 const MINIMUM = 1;
 const MAXIMUM = 11;
 const Blackjack_MAX = 21;
 public $valuecards = array();

    public function hit(){
        $HIT = rand(self::MINIMUM, self::MAXIMUM);
        $this->score = $HIT;
        $_SESSION['score'] += $HIT;

        if ($_SESSION['score']>self::Blackjack_MAX){
            die('the score you have is '.$_SESSION['score']."You lost ROFL!");
        }
        else {
            echo 'Your card:';
        }
        echo 'total: '.$_SESSION['score']."<br>";

        return $HIT;
    }


    public function makeArray($val){
        $this->valuecards = [];
        array_push($this->valuecards, $val);
    }

    public function Stand(){


    }

    public function Surrender(){
        unset($_SESSION['player']);
        unset($_SESSION['dealer']);
        $_SESSION['score'] = 0;
        return 'Dealer wins, get better kid :p';
    }


}