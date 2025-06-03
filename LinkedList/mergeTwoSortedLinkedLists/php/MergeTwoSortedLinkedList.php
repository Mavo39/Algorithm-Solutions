<?php 

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';

class MergeTwoSortedLinkedList extends SinglyLinkedList {
    public function mergeTwoSortedLinkedList(SinglyLinkedList $list1, SinglyLinkedList $list2): ?Node{
        $iterator1 = $list1->head;
        $iterator2 = $list2->head;

        $dummyNode = new Node(0);
        $iterator = $dummyNode;

        while(true){
            if($iterator1 === null){
                $iterator->next = $iterator2;
                break;
            }

            if($iterator2 === null){
                $iterator->next = $iterator1;
                break;
            }

            if($iterator1->data <= $iterator2->data){
                $iterator->next = $iterator1;
                $iterator1 = $iterator->next;
            } else {
                $iterator->next = $iterator2;
                $iterator2 = $iterator2->next;
            }
        }
        return $dummyNode->next;
    }

    public function print(?Node $node): void{
        $iterator = $node;
        $str = '';

        while($iterator->next !== null){
            $str .= $iterator->data . '➡';
            $iterator = $iterator->next;
        }
        $str .= $iterator->data;

        echo $str . PHP_EOL;
    }
}