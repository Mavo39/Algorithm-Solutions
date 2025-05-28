<?php 

require_once './SinglyLinkedList.php';

function getIndexValue(?SinglyLinkedList $head, int $index): int{
    if($head === null) return -1;
    // $head->headは片方向リストの先頭ノードを表す
    $iterator = $head->head;

    for($i = 0; $i < $index-1; $i++){
        if($iterator === null) return -1; 
        $iterator = $iterator->next;
    }

    return $iterator !== null ? $iterator->data : -1;
}
