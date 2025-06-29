<?php 

require_once __DIR__ . '/../../../../src/php/Deque/Deque.php';

function minWindowArrK(array $intArr, int $k): array
{
    $resArr = [];

    if(count($intArr) === 0 || count($intArr) < $k){
        return $resArr;
    }

    $deque = new Deque();
    
    for($i = 0; $i < $k; $i++){
        while($deque->peekBack() !== null && $intArr[$deque->peekBack()] >= $intArr[$i]){
            $deque->dequeueBack();
        }
        $deque->enqueueBack($i);
    }

    for($i = $k; $i < count($intArr); $i++){
        $resArr[] = $intArr[$deque->peekFront()];

        while($deque->peekFront() !== null && $deque->peekFront() <= $i-$k){
            $deque->dequeueFront();
        }

        while($deque->peekBack() !== null && $intArr[$deque->peekBack()] >= $intArr[$i]){
            $deque->dequeueBack();
        }

        $deque->enqueueBack($i);
    }
    $resArr[] = $intArr[$deque->peekFront()];

    return $resArr;
}