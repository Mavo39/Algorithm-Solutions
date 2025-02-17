<?php

// 再帰
function recursiveDigitsAdded(int $digits): int{
    $total = recursiveDigitsAddedHelper($digits, 0);
    if($total < 10){
        return $total;
    }
    return $total + recursiveDigitsAdded($total);
}

// 全桁の数字を合計する関数
function recursiveDigitsAddedHelper(int $digits, int $total): int{
    if($digits < 10){
        return $total + $digits;
    }
    return recursiveDigitsAddedHelper(floor($digits / 10), $total + $digits % 10);
}


// whileループ
// // 小計を求め、それを合計に足していく
// function splitAndAdd(int $digits): int{
//     $total = 0;
//     while($digits > 0){
//         $total += $digits % 10;
//         $digits = floor($digits / 10);
//     }
//     return $total;
// }

// function recursiveDigitsAdded(int $digits): int{
//     if($digits < 10){
//         return $digits;
//     }

//     $total = 0;
//     while($digits >= 10){
//         $digits= splitAndAdd($digits); // 小計を格納する
//         $total += $digits; // 小計を合計に加えていく
//     }
//     return $total;
// }