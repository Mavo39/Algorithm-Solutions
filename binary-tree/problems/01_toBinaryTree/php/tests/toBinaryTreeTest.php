<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';

// 1.
$root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo $root1->data . PHP_EOL;

// 2.
$root2 = toBinaryTree([5,2,18,-4,3]);
echo $root2->left->data . PHP_EOL;

// 3.
$root3 = toBinaryTree([27,14,35,10,19,31,42]);
echo $root3->left->right->data . PHP_EOL;

// 4.
$root4 = toBinaryTree([10,null,3]);
echo ($root4->left === null ? "null" : "incorrect") . PHP_EOL;

// 5.
$root5 = toBinaryTree([10,9]);
echo $root5->data . PHP_EOL;

// 6. 
$root6 = toBinaryTree([null]);
echo ($root6 === null ? "null" : "incorrect") . PHP_EOL;