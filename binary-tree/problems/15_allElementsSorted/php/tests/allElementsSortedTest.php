<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';
require_once __DIR__ . '/../src/allElementsSorted.php';

$tests = [
    [
        "input1" => [9,8,11],
        "input2" => [3,1,5],
        "output" => [1,3,5,8,9,11]
    ], 
    [
        "input1" => [3,null,5],
        "input2" => [2,1,6],
        "output" => [1,2,3,5,6]
    ], 
    [
        "input1" => [73,11,90,null,24,79,93],
        "input2" => [44,39,49,36,41,46,72,null,null,null,null,null,null,null,86],
        "output" => [11,24,36,39,41,44,46,49,72,73,79,86,90,93]
    ], 
    [
        "input1" => [29,14,48,1,20,42,76,null,null,null,null,null,null,null,97],
        "input2" => [46,21,85,7,27,73,98],
        "output" => [1,7,14,20,21,27,29,42,46,48,73,76,85,97,98]
    ], 
    [
        "input1" => [22,19,54,4,21,28,56],
        "input2" => [29,10,64,4,28,32,75,null,null,null,null,null,null,null,100],
        "output" => [4,4,10,19,21,22,28,28,29,32,54,56,64,75,100]
    ], 
];

foreach($tests as $i => $test){
    
}

// 1. allElementsSorted(toBinaryTree([9,8,11]), toBinaryTree([3,1,5])) 
//     --> [1,3,5,8,9,11]
// 2. allElementsSorted(toBinaryTree([3,null,5]), toBinaryTree([2,1,6])) 
//     --> [1,2,3,5,6]
// 3. allElementsSorted(toBinaryTree([73,11,90,null,24,79,93]), toBinaryTree([44,39,49,36,41,46,72,null,null,null,null,null,null,null,86]) ) 
//     --> [11,24,36,39,41,44,46,49,72,73,79,86,90,93]
// 4. allElementsSorted(toBinaryTree([29,14,48,1,20,42,76,null,null,null,null,null,null,null,97]), toBinaryTree([46,21,85,7,27,73,98])) 
//     --> [1,7,14,20,21,27,29,42,46,48,73,76,85,97,98]  
// 5. allElementsSorted(toBinaryTree([22,19,54,4,21,28,56]), toBinaryTree([29,10,64,4,28,32,75,null,null,null,null,null,null,null,100])) 
//     --> [4,4,10,19,21,22,28,28,29,32,54,56,64,75,100]