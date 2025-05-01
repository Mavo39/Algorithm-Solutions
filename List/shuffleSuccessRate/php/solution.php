<?php 

function shuffleSuccessRate(array $arr, array $shuffledArr): int{
    // 移動した配列の要素の個数をカウントする
    $count = 0;
    // 引数の配列が空の場合
    if(empty($arr) || empty($shuffledArr)) return $count;

    // ハッシュマップの作成
    $hashmap = [];
    for($i = 0; $i < count($shuffledArr); $i++){
        $hashmap[$shuffledArr[$i]] = $i;
    }

    // 地震前の配列を照合していく
    for($i = 0; $i < count($arr); $i++){
        if($hashmap[$arr[$i]] !== $i) $count++;
    }
    $res = floor(($count / count($arr)) * 100);

    return $res;
}