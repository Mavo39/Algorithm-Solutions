<?php

require_once __DIR__ . '/../../../Common/php/Stack.php';

function isParenthesesValid(string $parentheses): bool{
    $stack = [];
    $hashmap = [
        "}" => "{",
        "]" => "[",
        ")" => "("
    ];

    for($i = 0; $i < strlen($parentheses); $i++){
        $currChar = $parentheses[$i];

        if(array_key_exists($currChar, $hashmap)){
            if(empty($stack) || $stack[count($stack) - 1] !== $hashmap[$currChar]){
                $stack[] = $currChar;
            } else {
                array_pop($stack);
            }
        } else {
            $stack[] = $currChar;
        }
    }

    return empty($stack);
}