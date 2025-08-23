<?php 

function allElememtsSorted(?BinaryTree $root1, ?BinaryTree $root2): array
{
    
}

function inOrderWalk(?BinaryTree $root, array $arr): array
{
    if($root !== null){
        inOrderWalk($root->left, $arr);
        $arr[] = $root->data;
        inOrderWalk($root->right, $arr);
    }

    return $arr;
}