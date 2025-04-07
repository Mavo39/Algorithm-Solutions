<?php

function charInBagOfWordsCount(array $bagOfWords, string $keyCharacter): int{
    $count = 0;

    if(empty($bagOfWords) || strlen($keyCharacter) !== 1) return $count;

    for($i = 0; $i < count($bagOfWords); $i++){
        for($j = 0; $j < strlen($bagOfWords[$i]); $j++){
            if($bagOfWords[$i][$j] === $keyCharacter) $count++;
        }
    }

    return $count;
}