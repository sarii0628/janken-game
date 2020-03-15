<?php

class Janken {
    private $playerHand;
    private $pcHand;
    private $result;

    /*
    public function __construct($playerHand) {
        $this->playerHand = $playerHand;
        $janken_choices  = ["グー","チョキ","パー"];
        $rand_choice = array_rand($janken_choices, 1);
        $this->pcHand = $janken_choices[$rand_choice];
    }
    */

    public function __construct() {

    }
    
    public function setPlayerHand($playerHand) {
        $this->playerHand = $playaerHand;
    }

    public function setPcHand() {
        $janken_choices = ["グー", "チョキ", "パー"];
        $rand_choice = array_rand($janken_choices,1);
        $this->pcHand = $janken_choices[$rand_choice];
    }

    //コンストラクタ空にして、$playerHand, $pcHandそれぞれのセッターを用意する方がいい？

    public function battle() {
        switch ($this->playerHand) {
            case ($this->playerHand == $this->pcHand):
                $this->result = "あいこ";
            break;
            case "グー":
                $this->result = ($this->pcHand == "チョキ")? "勝ち": "負け";
            break;
            case "チョキ":
                $this->result = ($this->pcHand == "パー")? "勝ち": "負け";
            break;
            case "パー":
                $this->result = ($this->pcHand == "グー")? "勝ち": "負け";
            break;
        }
    }

    private function addHandImg($choice) {
        if ($choice == "グー") {
            return $choice . "&#x270a;";
        } elseif ($choice == "チョキ") {
            return $choice . "&#x270c;";
        } else {
            return $choice . "&#x1f590;";
        }
    }

    public function getPlayerHand() {
        return $this->addHandImg($this->playerHand);
    }

    public function getPcHand() {
        return $this->addHandImg($this->pcHand);
    }


    public function getResult() {
        return $this->result;
    }
}

?>