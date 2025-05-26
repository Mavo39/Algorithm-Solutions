<?php 

require_once './function.php';

echo getIndexValue(new SinglyLinkedList([3,2,1,5,6,4]), 1) . PHP_EOL;
echo getIndexValue(new SinglyLinkedList([7,8,2,3,1,7,8,11,4,3,2]), 5) . PHP_EOL;
echo getIndexValue(new SinglyLinkedList([34,35,64,34,10,2,14,5,353,23,35,63,23]), 7) . PHP_EOL;