<?php

require_once './Node.php';
require_once './SinglyLinkedList.php';

$list1 = new SinglyLinkedList([3,2,10,34,45,67,356]);
$list1->insertAtHead(new Node(367));
$list1->printList();

$list2 = new SinglyLinkedList([3,2,10,34,45,67,356]);
$list2->insertAtHead(new Node(4));
$list2->printList();

$list3 = new SinglyLinkedList([56]);
$list3->insertAtHead(new Node(50));
$list3->printList();

$list4 = new SinglyLinkedList([3,32,2,10,34,45,67,356]);
$list4->insertAtHead(new Node(46));
$list4->printList();

$list5 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
$list5->insertAtHead(new Node(75));
$list5->printList();

$list6 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
$list6->insertAtHead(new Node(96));
$list6->printList();