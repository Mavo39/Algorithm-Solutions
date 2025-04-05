<?php

function addEveryOtherElement(array $intArr): int{
    $res = 0;
    // 配列が空の場合
    if(empty($intArr)) return $res;

    for($i = 0; $i < count($intArr); $i+=2){
        $res += $intArr[$i];
    }

    return $res;
}