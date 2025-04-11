<?php

function generateAlphabet(string $firstAlphabet, string $secondAlphabet): array{
    $res = [];
    // 文字が空の場合
    if(empty($firstAlphabet) || empty($secondAlphabet)) return $res;

    // 引数を小文字に変換
    $first= strtolower($firstAlphabet);
    $second = strtolower($secondAlphabet);

    // $first > $second
    $smaller = ord($first) > ord($second) ? ord($second) : ord($first);
    // $first < $second
    $larger = ord($first) < ord($second) ? ord($second) : ord($first);
    
    for($i = $smaller; $i <= $larger; $i++){
        array_push($res, chr($i));
    }

    return $res;
}