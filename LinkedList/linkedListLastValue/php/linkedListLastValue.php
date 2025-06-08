<?php 

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';

function linkedListLastValue(?SinglyLinkedList $head): int{
    if($head === null) return 0;

    $iterator = $head;
    while($iterator->next !== null){
        $iterator = $iterator->next;
    }

    return $iterator->data;
}