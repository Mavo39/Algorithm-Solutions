<?php 

require_once __DIR__ . '/../../../src/php/toBinaryTree.php';
require_once __DIR__ . '/../src/exists.php';

// 1.
$root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo (exists($root1, 5) === true ? "true" : "false") . PHP_EOL;

// 2.
$root2 = toBinaryTree([0,-10,5,null,-3,null,9]);
echo (exists($root2, 10) === true ? "true" : "false") . PHP_EOL;

// 3.
$root3 = toBinaryTree([5,3,6,2,4,null,7]);
echo (exists($root3, 3) === true ? "true" : "false") . PHP_EOL;

// 4.
$root4 = toBinaryTree([5,3,6,2,4,null,7]);
echo (exists($root4, 5) === true ? "true" : "false") . PHP_EOL;

// 5.
$root5 = toBinaryTree([5,3,6,2,4,null,7]);
echo (exists($root5, 15) === true ? "true" : "false") . PHP_EOL;