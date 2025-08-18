<?php 

function maximumDepth(?BinaryTree $root): int
{
    if($root === null) return 0;
    return maximumDepthHelper($root, 0);
}

function maximumDepthHelper(?BinaryTree $root, int $count): int
{
    $leftDepth = ($root->left !== null) ? maximumDepthHelper($root->left, $count + 1) : $count;
    $rightDepth = ($root->right !== null) ? maximumDepthHelper($root->right, $count + 1) : $count;

    return max($leftDepth, $rightDepth);
}