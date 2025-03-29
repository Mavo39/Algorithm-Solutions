<?php

function evenRange(int $a, int $b): array{
    $evenList = [];
    // 最初の偶数をstartに格納する
    $start = $a % 2 == 0 ? $a : $a+1;
    // 偶数のみループ処理により配列に格納する
    for($i = $start; $i <= $b; $i+=2){
        array_push($evenList, $i);
    }
    return $evenList;
}