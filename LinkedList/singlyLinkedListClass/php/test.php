<?php 

require_once './SinglyLinkedList.php';

$item1 = new Item(7);
$item2 = new Item(99);
$item3 = new Item(45);

$item1->next = $item2;
$item2->next = $item3;

$numList = new SinglyLinkedList($item1);

$currentItem = $numList->head;
while($currentItem !== null){
    echo $currentItem->data . PHP_EOL;
    $currentItem = $currentItem->next;
}