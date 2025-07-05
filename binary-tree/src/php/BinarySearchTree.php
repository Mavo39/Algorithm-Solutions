<?php 

require_once __DIR__ . '/BinaryTree.php';
require_once __DIR__ . '/toBinaryTree.php';

class BinarySearchTree 
{
    public ?BinaryTree $root;

    public function __construct(array $arr)
    {
        sort($arr);
        $this->root = toBinaryTree($arr);
    }

    public function search(int $key): ?BinaryTree
    {
        $iterator = $this->root;
        while($iterator !== null){
            if($iterator->data === $key){
                return $iterator;
            }
            if($iterator->data > $key){
                $iterator = $iterator->left;
            } else {
                $iterator = $iterator->right;
            }
        }

        return null;
    }

    public function exists(int $key): bool
    {

    }
}