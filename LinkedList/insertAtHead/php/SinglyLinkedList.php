<?php 
require_once './Node.php';

class SinglyLinkedList {
    public ?Node $head;

    public function __construct(array $arr){
        $this->head = count($arr) > 0 ? new Node($arr[0]) : null;
        $iterator = $this->head;

        for($i = 1; $i < count($arr); $i++){
            $iterator->next = new Node($arr[$i]);
            $iterator = $iterator->next;
        }
    }

    public function insertAtHead(Node $newNode): void{
        $newNode->next = $this->head;
        $this->head = $newNode;
    }

    public function printList(): void{
        $iterator = $this->head;
        while($iterator !== null){
            echo $iterator->data . PHP_EOL;
            $iterator = $iterator->next;
        }
        echo '' . PHP_EOL;
    }
}