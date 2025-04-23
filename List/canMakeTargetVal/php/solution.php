<?php 

function canMakeTargetVal(array $arr, int $target): bool{
    // 配列が空のケース
    if(empty($arr)) return false;

    // 配列内の2つの要素の合計を順に検証していく
    for($i = 0; $i < count($arr)-1; $i++){
        // スタート位置を$iの1つ後からにする
        for($j = $i+1; $j < count($arr); $j++){
            if($arr[$i] + $arr[$j] === $target) return true;
        }
    }

    return false;
}