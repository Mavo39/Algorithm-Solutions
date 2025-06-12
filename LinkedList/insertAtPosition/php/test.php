<?php

use Common\SinglyLinkedList;

require_once '../../Common/php/SinglyLinkedList.php';
require_once '../../Common/php/utils.php';
require_once './insertAtPosition.php';

function runTest(array $inputList, int $position, int $data, string $expected): void{
   $list = new SinglyLinkedList($inputList);
   $head = $list->head;

   $head = insertAtPosition($head, $position, $data);
   $output = stringifyListFromNode($head);

    if ($output === $expected) {
        echo "Passed: {$output}\n";
    } else {
        echo "Failed: Got {$output}, Expected {$expected}\n";
    }
}

runTest([2,4],0,5,'2➡5➡4');
runTest([2,4],1,5,'2➡4➡5');
runTest([2,10,34,45,67,356],2,5,'2➡10➡34➡5➡45➡67➡356');
runTest([2,10,34,45,67,356],2,3,'2➡10➡34➡3➡45➡67➡356');
runTest([2,10,34,45,67,356],5,3,'2➡10➡34➡45➡67➡356➡3');
runTest([20,-5,34,45,67,356],34,50,'20➡-5➡34➡45➡67➡356');
runTest([20,-5,34,45,67,356,34,687,31,-34,5],20,54,'20➡-5➡34➡45➡67➡356➡34➡687➡31➡-34➡5');
runTest([20,-5,34,45,67,356,34,687,31,-34,5],4,54,'20➡-5➡34➡45➡67➡54➡356➡34➡687➡31➡-34➡5');