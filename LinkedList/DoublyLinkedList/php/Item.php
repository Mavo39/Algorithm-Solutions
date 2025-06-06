<?php 

class Item {
    public int $data;
    public ?Item $prev;
    public ?Item $next;

    public function __construct(int $data){
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}