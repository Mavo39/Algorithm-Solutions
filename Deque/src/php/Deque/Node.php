<?php

class Node 
{
    public $data;
    public $prev;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}