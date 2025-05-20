<?php 
// フィードバック後のコード
function insertionSort(array $arr): array{
    if(count($arr) === 0) return [];

    for($i = 1; $i < count($arr); $i++){
        $curr = $arr[$i];
        $j = $i - 1;
        while($j >= 0 && $arr[$j] > $curr){
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $curr;
    }

    return $arr;
}

// 自作コード
// function insertionSort(array $arr): array{
//     if(count($arr) === 0) return [];

//     for($i = 1; $i < count($arr); $i++){
//         $curr = $arr[$i];
//         for($j = $i-1; $j >= 0; $j--){
//             if($curr < $arr[$j]){
//                 $arr[$j+1] = $arr[$j];
//                 $arr[$j] = $curr;
//             }
//             else break;
//         }
//     }

//     return $arr;
// }