<?php 

function postorderTraversal(?BinaryTree $root): array
{
    $resArr = [];
    if($root === null) return $resArr;
    return postorderTraversalHelper($root, $resArr);
}

function postorderTraversalHelper(?BinaryTree $node, array &$arr): array
{
    if($node === null) return $arr;
    
    postorderTraversalHelper($node->left, $arr);
    postorderTraversalHelper($node->right, $arr);
    $arr[] = $node->data;

    return $arr;
}