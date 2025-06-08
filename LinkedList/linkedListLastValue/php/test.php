<?php 

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';
require_once './linkedListLastValue.php';

$list1 = new SinglyLinkedList([3,2,1,5,6,4]);
echo linkedListLastValue($list1->head);

