<?php 

require_once __DIR__ . '/../../../src/php/BinaryTree.php';

function exists(?BinaryTree $root, int $key): bool
{  
    $currentNode = $root;

    while($currentNode !== null){
        if($currentNode->data === $key){
            return true;
        }
        
        if($currentNode->data > $key){
            $currentNode = $currentNode->left;
        } else {
            $currentNode = $currentNode->right;
        }
    }

    return false;
}