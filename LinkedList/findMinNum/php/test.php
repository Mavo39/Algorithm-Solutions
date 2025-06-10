<?php 

use Common\SinglyLinkedList;

require_once '../../Common/php/SinglyLinkedList.php';
require_once './findMinNum.php';

// 1.
$list1 = new SinglyLinkedList([1,2,3,4,-1,2]);
echo findMinNum($list1->head) . PHP_EOL;

// 2.
$list2 = new SinglyLinkedList([1,1,1]);
echo findMinNum($list2->head) . PHP_EOL;

// 3.
$list3 = new SinglyLinkedList([3,3,2,10,34,45,67,356]);
echo findMinNum($list3->head) . PHP_EOL;

// 4.
$list4 = new SinglyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]);
echo findMinNum($list4->head) . PHP_EOL;

// 5.
$list5 = new SinglyLinkedList([71,8,16,33]);
echo findMinNum($list5->head) . PHP_EOL;

// 6.
$list6 = new SinglyLinkedList([101,54,82002,93,1207,131,1800,99]);
echo findMinNum($list6->head) . PHP_EOL;

// 7.
$list7 = new SinglyLinkedList([580,781]);
echo findMinNum($list7->head) . PHP_EOL;

// 8.
$list8 = new SinglyLinkedList([2,4,52,108]);
echo findMinNum($list8->head) . PHP_EOL;

// 9.
$list9 = new SinglyLinkedList([61,73,27,3001]);
echo findMinNum($list9->head) . PHP_EOL;