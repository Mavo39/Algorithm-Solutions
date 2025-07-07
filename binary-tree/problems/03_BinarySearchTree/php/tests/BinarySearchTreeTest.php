<?php 

require_once __DIR__ . '/../../../../src/php/BinarySearchTree.php';

$balancedBST = new BinarySearchTree([1,2,3,4,5,6,7,8,9,10,11]);

// 1.
echo $balancedBST->keyExists(6) === true ? "true" : "false" . PHP_EOL;

// 2.
echo json_encode($balancedBST->search(6)) . PHP_EOL;

// 3.
echo ($balancedBST->keyExists(10) ? "True" : "False") . PHP_EOL;

// 4.
echo json_encode($balancedBST->search(10)) . PHP_EOL;

// 5.
echo ($balancedBST->keyExists(34) ? "True" : "False") . PHP_EOL;

// 6.
echo json_encode($balancedBST->search(34)) . PHP_EOL;