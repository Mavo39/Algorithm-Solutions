<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';
require_once __DIR__ . '/../src/successor.php';

// 1. 
$root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo successor($root1, 5);

// 2.
$root2 = toBinaryTree([5,3,6,2,4,null,7]);
echo successor($root2, 5);

// 3.
$root3 = toBinaryTree([10,6,12,4,8,null,null,2]);
echo successor($root3, 12);

// 4.
$root4 = toBinaryTree([10,6,12,4,8,null,null,2]);
echo successor($root2, 2);

// 5.
$root5 = toBinaryTree([5,4,null]);
echo successor($root5, 5);

// 6.
$root6 = toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]);
echo successor($root6, 8);

// 7.
$root7 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
echo successor($root7, 6);

// 8.
$root8 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
echo successor($root8, 3);

// 9.
$root9 = toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]);
echo successor($root9, 10);

// 10.
$root10 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo successor($root10, -3);