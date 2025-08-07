<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';
require_once __DIR__ . '/../src/postorderTraversal.php';

$tests = [
    [
        'input' => [0,-10,5,null,-3,null,9],
        'expected' => [-3,-10,9,5,0]
    ],
    [
        'input' => [5,3,6,2,4,null,7],
        'expected' => [2,4,3,7,6,5]
    ],
    [
        'input' => [-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25],
        'expected' => [-18,-4,-11,-17,3,25,19,8,-2]        
    ],
    [
        'input' => [3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19],
        'expected' => [-10,-4,-7,0,2,1,-3,5,8,6,15,19,18,13,3]
    ],
    [
        'input' => [1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19],
        'expected' => [-6,-9,0,-4,-5,14,10,16,19,17,15,1]
    ],
    [
        'input' => [3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19],
        'expected' => [-10,-4,-7,0,2,1,-3,5,8,6,15,19,18,13,3]        
    ]
];

foreach($tests as $i => $test){
    $root = toBinaryTree($test['input']);
    $res = postorderTraversal($root);
    $expected = $test['expected'];

    $resCheck = $res === $expected ? "True" : "False";

    echo "Test case {$i} : {$resCheck}" . PHP_EOL;
}