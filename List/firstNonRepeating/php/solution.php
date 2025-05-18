<?php 

function firstNonRepeating(string $s): int{
    $length = strlen($s);
    if($length === 0) return -1;

    $hashmap = [];
    for($i = 0; $i < $length; $i++){
        $char = $s[$i];
        $hashmap[$char] = ($hashmap[$char] ?? 0) + 1;
    }

    for($i = 0; $i < $length; $i++){
        if($hashmap[$s[$i]] === 1){
            return $i;
        }
    }

    return -1;
}