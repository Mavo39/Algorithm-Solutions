<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';

function sumOfThreeNodes(?BinaryTree $root): int
{
    $sum = 0;
    if($root === null) return $sum;

    $sum += $root->data;
    if($root->left !== null){
        $sum += $root->left->data;
    }
    if($root->right !== null){
        $sum += $root->right->data;
    }

    return $sum;
}