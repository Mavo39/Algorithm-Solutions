<?php 

function intersectionOfArraysRepeats(array $intList1, array $intList2): array{
    $res = [];
    if(count($intList1) === 0 || count($intList2) === 0) return $res;

    $hashmap = [];
    foreach($intList1 as $int1){
        if(!isset($hashmap[$int1])){
            $hashmap[$int1] = 1;
        } else {
            $hashmap[$int1]++;
        }
    }

    foreach($intList2 as $int2){
        if(isset($hashmap[$int2]) && $hashmap[$int2] > 0){
            array_push($res, $int2);
            $hashmap[$int2]--;
        }
    }
    sort($res);

    return $res;
}