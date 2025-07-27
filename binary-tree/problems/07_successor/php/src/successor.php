<?php

require_once __DIR__ . '/../../../../src/php/BinaryTree.php';

function successor(?BinaryTree $root, int $key): ?BinaryTree
{
    $targetNode = findNode($root, $key);
    if ($targetNode === null) return null;
    if ($targetNode->right !== null) {
        return minimumNode($targetNode->right);
    }
    
    $successor = null;
    $current = $root;
    
    while ($current !== null) {
        if ($targetNode->data < $current->data) {
            $successor = $current;
            $current = $current->left;
        } elseif ($targetNode->data > $current->data) {
            $current = $current->right;
        } else {
            break;
        }
    }
    
    return $successor;
}

function findNode(?BinaryTree $root, int $key): ?BinaryTree
{
    $current = $root;
    
    while ($current !== null) {
        if ($key === $current->data) {
            return $current;
        }
        if ($key < $current->data) {
            $current = $current->left;
        } else {
            $current = $current->right;
        }
    }
    
    return null;
}

function minimumNode(BinaryTree $node): BinaryTree
{
    $current = $node;
    while ($current->left !== null) {
        $current = $current->left;
    }
    return $current;
}