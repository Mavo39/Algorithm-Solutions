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

    public function insertHeadTail(int $data){
        $headNode = new Node($data);
        $tailNode = new Node($data);

        $headNode->next = $this->head;
        $this->head = $headNode;

        $iterator = $this->head;
        while($iterator->next !== null){
            $iterator = $iterator->next;
        }
        $iterator->next = $tailNode;
    }

    public function printList(){
        $iterator = $this->head;
        $str = '';
        while($iterator->next !== null){
            $str .= $iterator->data . '➡';
            $iterator = $iterator->next;
        }
        $str .= $iterator->data;

        echo $str . PHP_EOL;
    }
}