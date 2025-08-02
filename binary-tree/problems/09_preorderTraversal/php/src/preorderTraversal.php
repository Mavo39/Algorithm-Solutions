<?php 

require_once __DIR__ . '/../../../../src/php/BinaryTree.php';

function preorderTraversal(?BinaryTree $root): array
{
    $res = [];
    return preorderTraversalHelper($root, $res);
}

function preorderTraversalHelper(?BinaryTree $node, array &$arr): array
{
    if($node !== null){
        $arr[] = $node->data;
        preorderTraversalHelper($node->left, $arr);
        preorderTraversalHelper($node->right, $arr);
    }

    return $arr;
}