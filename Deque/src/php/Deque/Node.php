<?php

class Node 
{
    public int $data;
    public ?Node $prev;
    public ?Node $next;

    public function __construct(int $data)
    {
        $this->data = $data;
        $this->prev = null;
        $this->next = null;
    }
}