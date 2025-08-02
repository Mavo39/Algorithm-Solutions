<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';
require_once __DIR__ . '/../src/preorderTraversal.php';

// 1.
$root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo json_encode(preorderTraversal($root1)) . PHP_EOL;

// 2.
$root2 = toBinaryTree([5,3,6,2,4,null,7]);
echo json_encode(preorderTraversal($root2)) . PHP_EOL;

// 3.
$root3 = toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]);
echo json_encode(preorderTraversal($root3)) . PHP_EOL;

// 4.
$root4 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
echo json_encode(preorderTraversal($root4)) . PHP_EOL;

// 5.
$root5 = toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]);
echo json_encode(preorderTraversal($root5)) . PHP_EOL;

// 6.
$root6 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
echo json_encode(preorderTraversal($root6)) . PHP_EOL;