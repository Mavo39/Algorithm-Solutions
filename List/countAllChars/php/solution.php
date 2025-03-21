<?php

function countAllChars(array $arr): int{
    // 空配列かどうかをチェック
    if(empty($arr)) return -1;

    $total = 0;
    for($i = 0; $i < count($arr); $i++){
        $total += strlen($arr[$i]);
    }
    return $total;
}