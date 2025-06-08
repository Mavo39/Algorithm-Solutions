<?php 

namespace Common;

require_once '../../Common/php/Node.php';

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

    public function printList(): void{
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