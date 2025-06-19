<?php 

require_once __DIR__ . '/Item.php';

class Stack {
    public $head;

    public function __construct(){
        $this->head = null;
    }

    public function push($data){
        $temp = $this->head;
        $this->head = new Item($data);
        $this->head->next = $temp;
    }

    public function pop(){
        if($this->head === null) return null;

        $temp = $this->head;
        $this->head = $this->head->next;

        return $temp->data;
    }

    public function peek(){
        if($this->head === null) return null;

        return $this->head->data;
    }
}