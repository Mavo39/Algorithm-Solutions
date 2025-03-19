<?php

function getMaxIndex(array $arr): int{
    // 配列が空の場合の対応
    if(empty($arr)) return -1;

    $maxIndex = 0;
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] >= $arr[$maxIndex]) $maxIndex = $i;
    }
    return $maxIndex;
}