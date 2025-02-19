<?php

// ①再帰
function gcd(int $m, int $n): int{
    if (($m % $n) == 0) {
        return $n;
    }
    else return gcd($n, $m % $n);
}

// ②while ループ
function gcdWhileLoopIteration(int $n1, int $n2): int{
    while($n1 % $n2 != 0){
        // n1 と n2 の値を小さくしていく
        $prevN1 = $n1; // prevN1 に n1を一時的に保存
        $n1 = $n2;
        $n2 = $prevN1 % $n2;
    }

    return $n2;
}

// ③while ループ return
//　ブロック文の中で return が返されるまで繰り返し処理を実行
function gcdWhileLoopIterationReturn(int $n1, int $n2): int{
    while(true){
        // 最大公約数が見つかったら処理終了
        if($n1 % $n2 == 0){
            return $n2;
        } else {
            $prevN1 = $n1;
            $n1 = $n2;
            $n2 = $prevN1 % $n2;
        }
    }
}

// ④while ループ　flag
// flag はスイッチの on/off のような役割をもつ
function gcdWhileLoopIterationFlag(int $n1, int $n2): int{
    $found = false;

    while(!$found){
        // found が true になると、!found は false となり、反復処理が終了する
        if($n1 % $n2 == 0) {
            $found = true;
        } else {
            $prevN1 = $n1;
            $n1 = $n2;
            $n2 = $prevN1 % $n2;
        }
    }

    return $n2;
}


