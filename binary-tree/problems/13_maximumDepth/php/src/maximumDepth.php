<?php 

function maximumDepth(?BinaryTree $root): int
{
    if($root === null) return 0;
    if($root->left === null && $root->right === null) return 0;

    return maximumDepthHelper($root, 0);
}

function maximumDepthHelper(?BinaryTree $root, int $count): int
{
    $leftDepth = ($root->left !== null) ? maximumDepthHelper($root->left, $count++) : $count;
    $rightDepth = ($root->right !== null) ? maximumDepthHelper($root->right, $count++) : $count;

    return $leftDepth > $rightDepth ? $leftDepth : $rightDepth;
}