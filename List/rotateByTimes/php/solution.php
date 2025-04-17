<?php

function rotateByTimes(array $ids, int $n): array{
    // 引数のチェック
    if(empty($ids)) return $ids;

    $length = count($ids);
    $n = $n % $length;
    // n == 0のとき/$n == 要素数のとき、引数の配列をそのまま返す
    if($n === 0 || $n === count($ids)) return $ids;

    for($i = 0; $i < $n; $i++){
        $last = array_pop($ids);
        array_unshift($ids, $last);
    }
    return $ids;
}