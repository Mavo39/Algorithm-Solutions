<?php 

require_once __DIR__ . '/../../../../src/php/BinaryTree.php';

function preorderTraversal(?BinaryTree $root): array
{
    $res = [];
    return preorderTraversalHelper($root, $res);
}

function preorderTraversalHelper(?BinaryTree $tRoot, array &$arr): array
{
    if($tRoot !== null){
        $arr[] = $tRoot->data;
        preorderTraversalHelper($tRoot->left, $arr);
        preorderTraversalHelper($tRoot->right, $arr);
    }

    return $arr;
}