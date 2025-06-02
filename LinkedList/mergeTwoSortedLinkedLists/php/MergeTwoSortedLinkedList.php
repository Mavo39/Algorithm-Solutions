<?php 

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';

class MergeTwoSortedLinkedList extends SinglyLinkedList {
    public function mergeTwoSortedLinkedList(SinglyLinkedList $head1, SinglyLinkedList $head2): Node{
        $iterator1 = $head1;
        $iterator2 = $head2;

        $head = new Node(null);

        while($iterator1->next !== null || $iterator2->next){
            if($iterator1->data <= $iterator2->data){
                $head = $iterator2->data;
                $iterator2 = $iterator2->next;
            } else {
                $head = $iterator1->data;
                $iterator1 = $iterator1->next;
            }
        }
        return $head;
    }
}