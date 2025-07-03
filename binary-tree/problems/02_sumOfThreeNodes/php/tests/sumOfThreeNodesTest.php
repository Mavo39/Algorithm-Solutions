<?php 

require_once __DIR__ . '/../../../../src/php/toBinaryTree.php';
require_once __DIR__ . '/../../php/src/sumOfThreeNodes.php';

// sumOfThreeNodes関数を評価する関数
function sumOfThreeNodesTest(?BinaryTree $root, int $expected, int $testNumber): void
{
    $res = sumOfThreeNodes($root);
    if($res === $expected){
        echo "test case $testNumber: pass" . PHP_EOL;
    } else {
        echo "test case $testNumber: fail" . PHP_EOL;
    }
}

// テストデータ一覧
$testCases = [
    [ [0, -10, 5, null, -3, null, 9], -5 ],
    [ [5, 2, 18, -4, 3], 25 ],
    [ [27, 14, 35, 10, 19, 31, 42], 76 ],
    [ [10, null, 3], 13 ],
    [ [10, 9], 19 ],
    [ [null], 0 ],
];

// 実行ループ
foreach ($testCases as $index => [$inputArray, $expected]) {
    $tree = toBinaryTree($inputArray);
    sumOfThreeNodesTest($tree, $expected, $index + 1);
}
