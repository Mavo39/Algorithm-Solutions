<?php 

require_once __DIR__ . '/../../../LinkedList/Common/php/SinglyLinkedList.php';

use Common\Node;

function palindromeLinkedList(?Node $head): bool{
    $currentNode = $head;
    $stack = [];
    while($currentNode !== null){
        array_push($stack, $currentNode->data);
        $currentNode = $currentNode->next;
    }

    $iterator = $head;
    while($iterator !== null){
        if(array_pop($stack) !== $iterator->data){
            return false;    
        }
        $iterator = $iterator->next;
    }

    return true;
}