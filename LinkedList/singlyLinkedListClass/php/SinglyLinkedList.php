<?php

require_once './Item.php';

class SinglyLinkedList {
    public Item $head;

    public function __construct(Item $head){
        $this->head = $head;
    }
}