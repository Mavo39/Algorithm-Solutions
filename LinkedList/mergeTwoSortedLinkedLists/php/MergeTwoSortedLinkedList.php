<?php 

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';

class MergeTwoSortedLinkedList{
    public static function mergeTwoSortedLinkedList(SinglyLinkedList $list1, SinglyLinkedList $list2): ?Node{
        $iterator1 = $list1->head;
        $iterator2 = $list2->head;

        $dummyNode = new Node(0);
        $iterator = $dummyNode;

        while ($iterator1 !== null && $iterator2 !== null) {
            if ($iterator1->data <= $iterator2->data) {
                $iterator->next = $iterator1;
                $iterator1 = $iterator1->next;
            } else {
                $iterator->next = $iterator2;
                $iterator2 = $iterator2->next;
            }
            $iterator = $iterator->next;
        }

        if ($iterator1 !== null) {
            $iterator->next = $iterator1;
        } else {
            $iterator->next = $iterator2;
        }
        
        return $dummyNode->next;
    }

    public static function printList(?Node $node): void{
        $iterator = $node;
        $str = '';

        while($iterator !== null){
            $str .= $iterator->data;
            if($iterator->next !== null){
                $str .= '➡';
            }
            $iterator = $iterator->next;
        }

        echo $str . PHP_EOL;
    }
}