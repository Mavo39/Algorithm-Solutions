<?php 

require_once __DIR__ . "/../../../../src/php/toBinaryTree.php";
require_once __DIR__ . "/../src/maximumDepth.php";

$tests = [
    // テストケース1
    [
        'input' => [0],
        'output' => 0
    ],
    // テストケース2
    [
        'input' => [0,1,null],
        'output' => 1
    ],
    // テストケース3
    [
        'input' => [0,-10,5,null,-3,null,9],
        'output' => 2
    ],
    // テストケース4
    [
        'input' => [5,2,18,-4,3],
        'output' => 2
    ],
    // テストケース5
    [
        'input' => [27,14,35,10,19,31,42],
        'output' => 2
    ],
    // テストケース6
    [
        'input' => [30,15,60,7,22,45,75,null,null,17,27],
        'output' => 3
    ],
    // テストケース7
    [
        'input' => [90,50,150,20,75,95,175,5,25,66,80,92,111,166,200],
        'output' => 3
    ],
    // テストケース8
    [
        'input' => [50,17,76,9,23,54,null,null,14,19,null,null,72],
        'output' => 3
    ],
    // テストケース9
    [
        'input' => [16,14,10,8,7,9,3,2,4,1],
        'output' => 3
    ],
    // テストケース10
    [
        'input' => [30,15,60,7,22,45,75,1,null,17,27,null,null,null,null,-1],
        'output' => 4
    ]
];

foreach($tests as $i => $test){
    $root = toBinaryTree($test['input']);
    
}

// maximumDepth(toBinaryTree([0]))--> 0
