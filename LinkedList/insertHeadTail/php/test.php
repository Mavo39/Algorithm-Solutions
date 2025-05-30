<?php 

require_once './Node.php';
require_once './SinglyLinkedList.php';

$list1 = new SinglyLinkedList([3,3,2,10,34,45,67,356]);
$list1->insertHeadTail(367);
$list1->printList();

$list2 = new SinglyLinkedList([3,3,2,10,34,45,67,356]);
$list2->insertHeadTail(4);
$list2->printList();

$list3 = new SinglyLinkedList([3,32,2,10,34,45,67,356]);
$list3->insertHeadTail(46);
$list3->printList();

$list4 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
$list4->insertHeadTail(75);
$list4->printList();

$list5 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
$list5->insertHeadTail(96);
$list5->printList();