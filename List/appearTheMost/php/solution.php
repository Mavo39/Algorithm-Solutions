<?php 

function appearTheMost(array $levels): array{
    // 配列の初期化
    $res = [];
    // エッジケース
    if(count($levels) === 0) return $res;

    // ハッシュマップの作成
    $hashmap = [];
    for($i = 0; $i < count($levels); $i++){
        if(!array_key_exists($levels[$i], $hashmap)){
            $hashmap[$levels[$i]] = 1;
        } else {
            $hashmap[$levels[$i]]++;
        }
    }

    // ハッシュマップの値を取り出し
    $values = array_values($hashmap);
    // 最大値の取得
    $maxValue = max($values);
    // キーをソートし、最大値と同じ要素を配列に格納する
    ksort($hashmap);
    foreach($hashmap as $key => $value){
        if($value === $maxValue) array_push($res, $key);
    }

    return $res;
}