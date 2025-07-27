<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';
require_once __DIR__ . '/../../../../src/php/binarySubtreeToArray.php';
require_once __DIR__ . '/../src/successor.php';

// 1. 
$root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo json_encode(binarySubtreeToArray(successor($root1, 5))) . PHP_EOL;

// 2.
$root2 = toBinaryTree([5,3,6,2,4,null,7]);
echo json_encode(binarySubtreeToArray(successor($root2, 5))) . PHP_EOL;

// 3.
$root3 = toBinaryTree([10,6,12,4,8,null,null,2]);
echo json_encode(binarySubtreeToArray(successor($root3, 12))) . PHP_EOL;

// 4.
$root4 = toBinaryTree([10,6,12,4,8,null,null,2]);
echo json_encode(binarySubtreeToArray(successor($root4, 2))) . PHP_EOL;

// 5.
$root5 = toBinaryTree([5,4,null]);
echo json_encode(binarySubtreeToArray(successor($root5, 5))) . PHP_EOL;

// 6.
$root6 = toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]);
echo json_encode(binarySubtreeToArray(successor($root6, 8))) . PHP_EOL;

// 7.
$root7 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
echo json_encode(binarySubtreeToArray(successor($root7, 6))) . PHP_EOL;

// 8.
$root8 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
echo json_encode(binarySubtreeToArray(successor($root8, 3))) . PHP_EOL;

// 9.
$root9 = toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]);
echo json_encode(binarySubtreeToArray(successor($root9, 10))) . PHP_EOL;

// 10.
$root10 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo json_encode(binarySubtreeToArray(successor($root10, -3))) . PHP_EOL;