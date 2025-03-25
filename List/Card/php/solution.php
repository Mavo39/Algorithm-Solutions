<?php

class Card {
    // プロパティ
    public $suit;
    public $value;
    public $intValue;

    // コンストラクタ
    public function __construct(string $suit, string $value, string $intValue){
        $this->suit = $suit;
        $this->value = $value;
        $this->intValue = $intValue;
    }
}

function printCardArray(array $arr){
    foreach($arr as $card){
        echo $card->suit . $card->value . "(" . $card->intValue . ")" . PHP_EOL;
    }
}
