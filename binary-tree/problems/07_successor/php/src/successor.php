<?php

require_once __DIR__ . '/../../../../src/php/BinaryTree.php';

function successor(?BinaryTree $root, int $key): ?BinaryTree
{
    $targetNode = findNode($root, $key);
    if($targetNode == null) return null;
    if($targetNode->right !== null) return minimumNode($root);

    $successor = null;
    $currentNode = $root;

    while($currentNode !== null){
        if($targetNode->data === $currentNode->data){
            return $successor;
        }

        if($targetNode->data < $currentNode->data){
            $successor = $currentNode;
            $currentNode = $currentNode->left;
        } else {
            $currentNode = $currentNode->right;
        }
    }

    return $successor;
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

function minimumNode(?BinaryTree $root): BinaryTree
{
    $currentNode = $root;
    
    while($currentNode !== null && $currentNode->left !== null){
        $currentNode = $currentNode->left;
    }

    return $currentNode;
}