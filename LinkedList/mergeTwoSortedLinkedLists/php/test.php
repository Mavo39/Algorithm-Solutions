<?php 

require_once '../../Common/php/Node.php';
require_once '../../Common/php/SinglyLinkedList.php';

$list1 = new SinglyLinkedList([1,2,3]);
$list2 = new SinglyLinkedList([1,4,5]);
$merger = new MergeTwoSortedLinkedList([]);
$mergedHead = $merger->mergeTwoSortedLinkedList($list1, $list2);
$merger->print($mergedHead);
