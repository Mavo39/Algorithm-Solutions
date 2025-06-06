<?php 

require_once './Item.php';
require_once './DoublyLinkedList.php';

$numList = new DoublyLinkedList([1,2,3,4,5,6,7]);

echo $numList->head->data . PHP_EOL;
echo $numList->head->next->data . PHP_EOL;
echo $numList->head->next->prev->data . PHP_EOL; 
echo $numList->tail->data . PHP_EOL;  
echo $numList->tail->prev->data . PHP_EOL;  
echo $numList->tail->prev->prev->data . PHP_EOL;