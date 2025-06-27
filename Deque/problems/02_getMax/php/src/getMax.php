<?php 

require_once __DIR__ . '/../../../../src/php/Deque/Deque.php';

function getMax(array $arr): int{
    if(count($arr) === 0){
        return 0;
    }

    $deque = new Deque();
    $deque->enqueueBack($arr[0]);

    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] > $deque->peekFront()){
            $deque->enqueueFront($arr[$i]);
        } else {
            $deque->enqueueBack($arr[$i]);
        }
    }

    return $deque->peekFront();
}