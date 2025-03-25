<?php

require_once './solution.php';

// 配列にはオブジェクトではなく、オブジェクトの参照が格納される

// ① 1回ずつ格納
// $cards = [];
// array_push($cards, new Card("♣", "A", "1"));
// array_push($cards, new Card("♦", "K", "13"));
// array_push($cards, new Card("♥", "Q", "12"));
// array_push($cards, new Card("♠", "J", "11"));

// ② 配列初期化のタイミングでまとめて格納
$cards = [
    new Card("♣", "A", "1"),
    new Card("♦", "K", "13"),
    new Card("♥", "Q", "12"),
    new Card("♠", "J", "11")
];

printCardArray($cards);