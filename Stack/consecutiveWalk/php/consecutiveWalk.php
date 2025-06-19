<?php 

require_once '../../Common/php/Stack.php';

function consecutiveWalk(array $arr): array{
    if(count($arr) === 0) return [];

    $stack = new Stack();
    $stack->push($arr[0]);

    for($i = 1; $i < count($arr); $i++){
        if($stack->peek() > $arr[$i]){
            while($stack->peek() !== null){
                $stack->pop();
            }
        }
        $stack->push($arr[$i]);
    }

    $newArr = [];
    while($stack->peek() !== null){
        array_push($newArr, $stack->pop());
    }

    return $newArr;
}