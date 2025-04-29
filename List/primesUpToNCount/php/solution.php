<?php

function primesUpToNCount(int $n): int{
    $cache = array_fill(0, $n, true);

    // 素数は2から始まるため、カウンタは2からスタートさせる
    for($currentPrime = 2; $currentPrime <= ceil(sqrt($n)); $currentPrime++){
        // cacheでfalseならばスキップする
        if(!$cache[$currentPrime]) continue;
        $i = 2;
        $ip = $i * $currentPrime;
        while($ip < $n){
            $cache[$ip] = false;
            $i++;
            $ip = $i * $currentPrime;
        }
    }

    $count = 0;
    // $cacheの0,1は素数ではないため除外
    for($i = 2; $i < count($cache); $i++){
        if($cache[$i]) $count++;
    }

    return $count;
}