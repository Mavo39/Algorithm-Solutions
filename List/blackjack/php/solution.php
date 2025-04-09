<?php

function winnerBlackjack(array $playerCards, array $houseCards): bool{
    // プレーヤーの手札がない場合
    if(empty($playerCards)) return false;
    // ディーラーの手札がない場合
    if(empty($houseCards)) return true;

    // 手持ちカードを値部分のみの文字列にする
    intOfStringArray($playerCards);
    intOfStringArray($houseCards);

    // 手持ちのカードを整数型に変換
    toIntArray($playerCards);
    toIntArray($houseCards);

    // プレーヤー・ディーラーの手持ちカードの合計を求める
    $playerScore = array_sum($playerCards);
    $houseScore = array_sum($houseCards);

    if($playerScore == $houseScore || $playerScore > 21) return false;
    else if($houseScore > 21) return true;
    else return $playerScore > $houseScore;
}

// 配列に格納されている文字列を手札の値に該当する部分のみに変える処理を行なう
// 参照渡しによって配列そのものを処理する
function intOfStringArray(array &$cards): void{
    // 引数の配列が空の場合
    if(empty($cards)) return;

    for($i = 0; $i < count($cards); $i++){
        // 配列内でマークを切り取り、文字列を取得
        $cards[$i] = substr($cards[$i], 3);
    }
}

// 文字列型を整数型に変換
// 参照渡しによって配列そのものを処理する
function toIntArray(array &$cards): void{
    // 引数の配列が空の場合
    if(empty($cards)) return;

    for($i = 0; $i < count($cards); $i++){
        // if ($cards[$i] === "A") $cards[$i] = 1;
        // elseif ($cards[$i] === "J") $cards[$i] = 11;
        // elseif ($cards[$i] === "Q") $cards[$i] = 12;
        // elseif ($cards[$i] === "K") $cards[$i] = 13;
        // else $cards[$i] = (int)$cards[$i];

        // ↓ match()をつかって場合分け
        $cards[$i] = match($cards[$i]){
            "A" => 1, 
            "J" => 11,
            "Q" => 12,
            "K" => 13,
            default => (int)$cards[$i]
        };
    }
}

// 配列内の数値の合計値を求める
// forループを使わずにarray_sum()でできることを知ったため不要
// function sumOfArray(array $cards): int{
//     $sum = 0;
//     // 配列が空の場合
//     if(empty($cards)) return $sum;

//     for($i = 0; $i < count($cards); $i++){
//         $sum += (int)$cards[$i];
//     }

//     return $sum;
// }