<?php

require_once __DIR__ . '/../../../../src/php/BinaryTree.php';

function successor(?BinaryTree $root, int $key): ?BinaryTree
{

}

function findNode(?BinaryTree $root, int $key): ?BinaryTree
{
    $currentNode = $root;

    while($currentNode !== null){
        if($currentNode->data === $key){
            return $currentNode;
        }
        if($currentNode->data < $key){
            $currentNode = $currentNode->left;
        } else {
            $currentNode = $currentNode->right;
        }
    }

    return $currentNode;
}