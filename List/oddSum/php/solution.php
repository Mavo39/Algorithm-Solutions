<?php

function sumOfOddElement(array $arr): int{
    $total = 0;
    for($i = 0; $i < count($arr); $i++){
        if(isOdd($arr[$i])) $total += $arr[$i];
    }
    return $total;
}

function isOdd(int $num): bool{
    return $num % 2 == 1;
}
