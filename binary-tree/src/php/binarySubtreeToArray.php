<?php

require_once __DIR__ . '/BinarySearchTree.php';

function binarySubtreeToArray(?BinaryTree $root): array
{
    if ($root === null) {
        return [];
    }

    $result = [];
    $queue = [$root];

    while (!empty($queue)) {
        $current = array_shift($queue);
        $result[] = $current->data;

        if ($current->left !== null) {
            $queue[] = $current->left;
        } else {
            $result[] = null;
        }

        if ($current->right !== null) {
            $queue[] = $current->right;
        } else {
            $result[] = null;
        }
    }

    while(!empty($result) && end($result) === null){
        array_pop($result);
    }

    return $result;
}
