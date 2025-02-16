<?php

// 反復
function fibonacci(int $n): int{
    $f1 = 0;
    $f2 = 1;

    for($i = 0; $i < $n; $i++){
        $newF1 = $f1 + $f2;
        $f1 = $f2; 
        $f2 = $newF1;
    }
    return $f1;
}

// p 1 2
// 0 1 1 2 3 5 8 13 21 34  ->実際の数
// 0 1 2 3 4 5 6 7  8  9   ->何番目か
//         f1  f2 newF1
// 1回目 -> 0 + 1 = 1
// 2回目 -> 1 + 1 = 2
// 3回目 -> 1 + 2 = 3
// 4回目 -> 2 + 3 = 5
// 5回目 -> 3 + 5 = 8
// 6回目 -> 5 + 8 = 13

// 再帰
// function fibonacci(int $n): int{
//     if($n == 0){
//         return 0;
//     } else if($n == 1){
//         return 1;
//     }
//     return fibonacci($n - 1) + fibonacci($n - 2);
// }

