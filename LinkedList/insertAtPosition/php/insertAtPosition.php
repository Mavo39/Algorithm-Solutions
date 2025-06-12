<?php 

use Common\Node;

function insertAtPosition(?Node $head, int $position, int $data): ?Node{
    if($head === null) return null;

    $index = 0;
    $currentNode = $head;

    while($currentNode !== null){
        if($index === $position){
            $newNode = new Node($data);
            $temp = $currentNode->next;
            $currentNode->next = $newNode;
            $newNode->next = $temp;
            break;
        }
        $currentNode = $currentNode->next;
        $index++;
    }

    return $head;
}