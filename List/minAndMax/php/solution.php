<?php

function minAndMax(array $intArr): array{
    // 引数が配列のみで厳密にチェックする
    // ※empty()は null や未定義の変数も許容する
    if(count($intArr) === 0) return [];

    $sum = 0;
    $minIndex = 0;
    $maxIndex = 0;

    for($i = 0; $i < count($intArr); $i++){
        $sum += $intArr[$i];
        $minIndex = $intArr[$minIndex] > $intArr[$i] ? $i : $minIndex;
        $maxIndex = $intArr[$maxIndex] < $intArr[$i] ? $i : $maxIndex;
    }
    
    return [$sum - $intArr[$maxIndex], $sum - $intArr[$minIndex]];
}