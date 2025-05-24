<?php

class Item {
    public int $data;
    public ?Item $next;

    public function __construct(int $data){
        $this->data = $data;
        $this->next = null;
    }
}