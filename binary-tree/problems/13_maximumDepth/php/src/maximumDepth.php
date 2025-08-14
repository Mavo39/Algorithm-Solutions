<?php 

function maximumDepth(?BinaryTree $root): int
{
    if($root === null) return 0;
    if($root->left === null && $root->right === null) return 0;

    return maximumDepthHelper($root, 0);
}

function maximumDepthHelper(?BinaryTree $root, int $count): int
{
    
}