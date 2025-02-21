<?php

function isPrime(int $number): bool{
    if($number == 1){
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        // 余りが出ない = 割り切れた = 約数
        if($number % $i == 0){
            return false;
        }
    }
    return true;
}
