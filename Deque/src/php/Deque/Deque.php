<?php 

require_once './Node.php';

class Deque
{
    public ?Node $head;
    public ?Node $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function peekFront(): ?int
    {
        if($this->head === null){
            return null;
        }

        return $this->head->data;
    }

    public function peekBack(): ?int
    {
        if($this->tail === null){
            return null;
        }

        return $this->tail->data;
    }

    public function enqueueFront(int $data): void
    {
        $newHead = new Node($data);

        if($this->head === null){
            $this->head = $newHead;
            $this->tail = $newHead;
        } else {
            $newHead->prev = null;
            $newHead->next = $this->head;
            $this->head->prev = $newHead;
            $this->head = $newHead;
        }
    }

    public function enqueueBack(int $data): void
    {
        $newTail = new Node($data);

        if($this->tail === null){
            $this->tail = $newTail;
            $this->head = $newTail;
        } else {
            $newTail->next = null;
            $newTail->prev = $this->tail;
            $this->tail->next = $newTail;
            $this->tail = $newTail;
        }
    }

    public function dequeueFront(): ?int
    {
        if($this->head === null){
            return null;
        }

        $temp = $this->head;
        $this->head = $this->head->next;

        if($this->head === null){
            $this->tail = null;
        } else {
            $this->head->prev = null;
        }

        return $temp->data;
    }

    public function dequeueBack(): ?int
    {
        if($this->tail === null){
            return null;
        }

        $temp = $this->tail;
        $this->tail = $this->tail->prev;

        if($this->tail === null){
            $this->head = null;
        } else {
            $this->tail->next = null;
        }

        return $temp->data;
    }
}