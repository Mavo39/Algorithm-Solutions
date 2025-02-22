<?php

function perfectNumberList(int $n): string{
    $res = "";
    for($i = 2; $i <= $n; $i++){
        if(isPerfectNumber($i)){
            $res .= "-{$i}";
        } 
    }
    if($res == ""){
        return "none";
    }
    return substr($res, 1);
}

// 完全数かどうかを求める関数
function isPerfectNumber(int $number): bool{
    $total = 0;
    for($i = 1; $i < $number; $i++){
        if($number % $i == 0){
            $total += $i;
        }
    }
    return $total == $number;
}
