<?php 

require_once './Item.php';

class DoublyLinkedList {
    public ?Item $head;
    public ?Item $tail;

    public function __construct(array $arr){
        if(count($arr) <= 0){
            $this->head = new Item(0);
            $this->tail = $this->head;
            return;
        }

        $this->head = new Item($arr[0]);
        $currentNode = $this->head;

        for($i = 1; $i < count($arr); $i++){
            $currentNode->next = new Item($arr[$i]);
            $currentNode->next->prev = $currentNode;
            $currentNode = $currentNode->next;
        }
        $this->tail = $currentNode;
    }
}