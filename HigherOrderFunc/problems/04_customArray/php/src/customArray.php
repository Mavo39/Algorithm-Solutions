<?php

$cube = fn(int $n): int => $n * $n * $n;

$splitAndAdd = function(int $n): int{
    $n = abs($n);
    $sum = 0;

    while($n > 0){
        $sum += $n % 10;

        $n = (int)($n / 10);
    }

    return $sum;
};

$customArray = function(callable $f, array $arr): void{
    for($i = 0; $i < count($arr); $i++){
        echo $f($arr[$i]) . PHP_EOL;
    }
};