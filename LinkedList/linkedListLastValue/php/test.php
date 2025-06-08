<?php

use Common\Node;
use Common\SinglyLinkedList;

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';
require_once './linkedListLastValue.php';

$list1 = new SinglyLinkedList([3,2,1,5,6,4]);
echo linkedListLastValue($list1->head) . PHP_EOL;

$list2 = new SinglyLinkedList([7,8,2,3,1,7,8,11,4,3,2]);
echo linkedListLastValue($list2->head) . PHP_EOL;

$list3 = new SinglyLinkedList([34,35,64,34,10,2,14,5,353,23,35,63,23]);
echo linkedListLastValue($list3->head) . PHP_EOL;

$list4 = new SinglyLinkedList([1]);
echo linkedListLastValue($list4->head) . PHP_EOL;