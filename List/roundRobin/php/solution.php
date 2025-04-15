<?php

function chooseNFromBags2d(int $n, array $listOfBags): array{
    // nが0だった場合
    if($n <= 0) return [];
    // 配列が空だった場合
    if(empty($listOfBags)) return [];

    // バッグの個数
    $totalBags = count($listOfBags);
    // ランダムに選ばれた数を格納する配列
    $chosenNumbers = [];
    // $nに達するまでの回数をcounter変数で管理する
    $counter = 0;
    
    while($counter < $n){
        // $counter % $totalBagsでバッグの中を循環させる
        $currentBag = $listOfBags[$counter % $totalBags];
        // 選択された数値を配列に追加
        array_push($chosenNumbers, $currentBag[rand(0, count($currentBag)-1)]);
        // counterを1ずつ増やしていく
        $counter++;
    }
    return $chosenNumbers;
}