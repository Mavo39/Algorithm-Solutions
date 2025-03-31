<?php

function primeArray(int $n): array{
    $primes = [];
    for($i = 2; $i <= $n; $i++){
        // array_push()を使わずに、配列の末尾に素数を格納していく
        if(isPrime($i)) $primes[] = $i;
    }
    return $primes;
}

function isPrime(int $n): bool{
    // 最初に選別する
    if($n <= 1) return false;
    if($n == 2) return true;
    if($n % 2 == 0) return false;

    // ループ開始が3であり、更新式を$i+=2とすることで、偶数をスキップできる
    for($i = 3; $i * $i <= $n; $i+=2){
        if($n % $i == 0) return false;
    }

    return true;
}