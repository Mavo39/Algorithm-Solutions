<?php 

require_once __DIR__ . '/../../../../src/php/BinarySearchTree.php';

$balancedBST = new BinarySearchTree([1,2,3,4,5,6,7,8,9,10,11]);

// 1.
echo $balancedBST->keyExists(6) === true ? "true" : "false" . PHP_EOL;

// 2.
echo $balancedBST->