<?php 

function hasSameStructure(string $inputChar, string $wordList): bool{
    // エッジケース
    if(strlen($inputChar) === 0 || strlen($wordList) === 0) return false;

    // 文字列の長さと配列の要素数が一致しないケース
    $newWordList = explode(" ", $wordList);
    if(strlen($inputChar) !== count($newWordList)) return false;

    $hashmap = [];
    for($i = 0; $i < count($newWordList); $i++){
        if(isset($hashmap[$inputChar[$i]]) && $hashmap[$inputChar[$i]] !== $newWordList[$i]){
            return false;
        }
        else if(!isset($hashmap[$inputChar[$i]]) && in_array($newWordList[$i], $hashmap)){
            return false;
        }
        else {
            $hashmap[$inputChar[$i]] = $newWordList[$i];
        }
    }

    return true;
}