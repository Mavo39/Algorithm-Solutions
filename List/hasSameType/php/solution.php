<?php 
function hasSameType(string $user1, string $user2): bool{
    if(strlen($user1) === 0 || strlen($user2) === 0) return false;
    if(strlen($user1) !== strlen($user2)) return false;

    $hashmap = [];
    for($i = 0; $i < strlen($user1); $i++){
        if(!isset($hashmap[$user1[$i]])){
            if(in_array($user2[$i], array_values($hashmap))){
                return false;
            }
            $hashmap[$user1[$i]] = $user2[$i];
        }
        else if(isset($hashmap[$user1[$i]]) && $hashmap[$user1[$i]] !== $user2[$i]){
            return false;
        }
    }
    return true;
}