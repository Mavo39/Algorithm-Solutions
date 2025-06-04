<?php 

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';
require_once './MergeTwoSortedLinkedList.php';

// 1.
$list1 = new SinglyLinkedList([1,2,3]);
$list2 = new SinglyLinkedList([1,4,5]);
$mergedHead1 = MergeTwoSortedLinkedList::mergeTwoSortedLinkedList($list1, $list2);
MergeTwoSortedLinkedList::printList($mergedHead1);

// 2.
$list3 = new SinglyLinkedList([1,2,3,10,30,45]);
$list4 = new SinglyLinkedList([1,4,30,50,80]);
$mergedHead2 = MergeTwoSortedLinkedList::mergeTwoSortedLinkedList($list3, $list4);
MergeTwoSortedLinkedList::printList($mergedHead2);

// 3.
$list5 = new SinglyLinkedList([2,3,5]);
$list6 = new SinglyLinkedList([5,8,12]);
$mergedHead3 = MergeTwoSortedLinkedList::mergeTwoSortedLinkedList($list5, $list6);
MergeTwoSortedLinkedList::printList($mergedHead3);

// 4.
$list7 = new SinglyLinkedList([1,1,2,3,3,5]);
$list8 = new SinglyLinkedList([2,2,3,3,5,5,10,10]);
$mergedHead4 = MergeTwoSortedLinkedList::mergeTwoSortedLinkedList($list7, $list8);
MergeTwoSortedLinkedList::printList($mergedHead4);

