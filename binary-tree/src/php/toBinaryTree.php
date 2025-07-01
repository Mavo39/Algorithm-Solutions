<?php 

require_once __DIR__ . '/BinaryTree.php';

function toBinaryTree(array $intArr): ?BinaryTree
{
    if(empty($intArr) || $intArr[0] === null) return null;

    $root = new BinaryTree($intArr[0]);
    $queue[] = $root;
    $i = 1;

    while($i < count($intArr)){
        $current = array_shift($queue);

        if ($i < count($intArr)) {
            if ($intArr[$i] !== null) {
                $left = new BinaryTree($intArr[$i]);
                $current->left = $left;
                $queue[] = $left;
            }
            $i++;
        }

        if ($i < count($intArr)) {
            if ($intArr[$i] !== null) {
                $right = new BinaryTree($intArr[$i]);
                $current->right = $right;
                $queue[] = $right;
            }
            $i++;
        }
    }

    return $root;
}