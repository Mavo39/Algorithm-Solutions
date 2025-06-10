<?php 

use Common\Node;

function findMinNum(?Node $head): int{
    if($head === null) return -1;

    $i = 0;
    $minIndex = 0;
    $minValue = $head->data;
    $currentNode = $head;

    while($currentNode !== null){
        if($minValue >= $currentNode->data){
            $minValue = $currentNode->data;
            $minIndex = $i;
        }
        $currentNode = $currentNode->next;
        $i++;
    }

    return $minIndex;
}