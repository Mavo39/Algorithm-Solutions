<?php 

require_once __DIR__ . '/../LinkedList/Common/PHP/Node.php';
require_once __DIR__ . '/../LinkedList/Common/PHP/SinglyLinkedList.php';

use Common\SinglyLinkedList;

// 1.
$list1 = new SinglyLinkedList([1,2,3]);
echo palindromeLinkedList($list1->head) . PHP_EOL;

// 2.
$list2 = new SinglyLinkedList([1,2]);
echo palindromeLinkedList($list2->head) . PHP_EOL;

// 3.
$list3 = new SinglyLinkedList([1,0,1]);
echo palindromeLinkedList($list3->head) . PHP_EOL;

// 4.
$list4 = new SinglyLinkedList([3,4,4,3,6]);
echo palindromeLinkedList($list4->head) . PHP_EOL;

// 5.
$list5 = new SinglyLinkedList([3,6,4,4,3,6]);
echo palindromeLinkedList($list5->head) . PHP_EOL;

// 6.
$list6 = new SinglyLinkedList([3,6,4,4,6,3]);
echo palindromeLinkedList($list6->head) . PHP_EOL;

// 7.
$list7 = new SinglyLinkedList([1,2,3,2,1]);
echo palindromeLinkedList($list7->head) . PHP_EOL;