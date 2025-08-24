<?php 

function allElememtsSorted(?BinaryTree $root1, ?BinaryTree $root2): array
{
    $arr1 = [];
    $arr2 = [];

    $arr1 = inOrderWalk($root1, $arr1);
    $arr2 = inOrderWalk($root2, $arr2);

    $resArr = [];
    $arr1Index = 0;
    $arr2Index = 0;

    while($arr1Index < count($arr1) && $arr2Index < count($arr2)){
        if($arr1[$arr1Index] < $arr2[$arr2Index]){
            $resArr[] = $arr1[$arr1Index++];
        } else {
            $resArr[] = $arr2[$arr2Index++];
        }
    }

    while($arr1Index < count($arr1)){
        $resArr[] = $arr1[$arr1Index++];
    }

    while($arr2Index < count($arr2)){
        $resArr[] = $arr2[$arr2Index++];
    }

    return $resArr;
}

function inOrderWalk(?BinaryTree $root, array &$arr): array
{
    if($root !== null){
        inOrderWalk($root->left, $arr);
        $arr[] = $root->data;
        inOrderWalk($root->right, $arr);
    }

    return $arr;
}