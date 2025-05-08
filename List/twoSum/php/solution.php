<?php

function twoSum(array $intArr, int $sumInt): array{
    $res = [];
    // エッジケース
    if(count($intArr) === 0) return $res;
    $hashmap = [];
    
    for($i = 0; $i < count($intArr); $i++){
        if(!array_key_exists($intArr[$i], $hashmap)) $hashmap[$intArr[$i]] = $i;
    }
    
    for($i = 0; $i < count($intArr); $i++){
        $diff = $sumInt - $intArr[$i];
        if(array_key_exists($diff, $hashmap) && $hashmap[$diff] !== $i){
            return $i < $hashmap[$diff] ? [$i, $hashmap[$diff]] : [$hashmap[$diff], $i];
        }
    }
    return [];
}