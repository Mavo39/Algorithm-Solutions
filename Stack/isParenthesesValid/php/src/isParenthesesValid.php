<?php

require_once __DIR__ . '/../../../Common/php/Stack.php';

function isParenthesesValid(string $parentheses): bool{
    if(strlen($parentheses) === 0){
        return false;
    }

    $stack = new Stack();

    $hashmap = [
        "}" => "{",
        "]" => "[",
        ")" => "("
    ];

    for($i = 0; $i < strlen($parentheses); $i++){
        $currChar = $parentheses[$i];

        if($stack->peek() === null || $stack->peek() !== $hashmap[$currChar]){
            $stack->push($currChar);
        } else {
            $stack->pop();
        }
    }

    return $stack->peek() === null;
}
