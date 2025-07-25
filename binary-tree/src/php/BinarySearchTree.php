<?php 

require_once __DIR__ . '/BinaryTree.php';
require_once __DIR__ . '/toBinaryTree.php';

class BinarySearchTree 
{
    public ?BinaryTree $root;

    public function __construct(array $arr)
    {
        sort($arr);
        $this->root = self::sortedArrayToBSTHelper($arr, 0, count($arr)-1);
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

    public function keyExists(int $key): bool
    {
        return $this->search($key) !== null;
    }

    public static function sortedArrayToBSTHelper(array $arr, int $start, int $end): ?BinaryTree
    {
        if($start === $end) return new BinaryTree($arr[$start]);

        $mid = floor(($start + $end) / 2);

        $left = null;
        if($start <= $mid-1){
            $left = self::sortedArrayToBSTHelper($arr, $start, $mid - 1);
        }

        $right = null;
        if($mid+1 <= $end){
            $right = self::sortedArrayToBSTHelper($arr, $mid + 1, $end);
        }

        $root = new BinaryTree($arr[$mid], $left, $right);
        
        return $root;
    }
}