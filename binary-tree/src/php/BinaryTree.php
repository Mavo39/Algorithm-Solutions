<?php 

class BinaryTree {
    public int $data;
    public ?BinaryTree $left;
    public ?BinaryTree $right;

    public function __construct(int $data)
    {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}
