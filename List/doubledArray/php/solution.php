<?php 

function doubledArray(array $arr): array{
    if(count($arr) === 0) return [];
    else return doubledArrayHelper($arr, 0, count($arr)-1);
}

function doubledArrayHelper(array $arr, int $start, int $end): array{
    if($start === $end){
        $doubled = $arr[$start] * 2;
        return [$doubled];
    }
    
    $mid = intdiv($start + $end, 2);
    $leftArr = doubledArrayHelper($arr, $start, $mid);
    $rightArr = doubledArrayHelper($arr, $mid+1, $end);

    return array_merge($leftArr, $rightArr);
}
