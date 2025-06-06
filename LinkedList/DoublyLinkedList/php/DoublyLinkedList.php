<?php 

require_once './Item.php';

class DoublyLinkedList {
    public ?Item $head;
    public ?Item $tail;

    public function __construct(array $arr){
        if(count($arr) <= 0){
            $this->head = null;
            $this->tail = null;
            return;
        }

        $this->head = new Item($arr[0]);
        $currentNode = $this->head;

        for($i = 1; $i < count($arr); $i++){
            $newNode = new Item($arr[$i]);
            $currentNode->next = $newNode;
            $newNode->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
    }
}