<?php 

require_once __DIR__ . '/../src/getMax.php';

# getMax関数をテストする関数
function testGetMax(int $expected, array $arr): void
{
    $result = getMax($arr);

    if($expected === $result){
        echo "True" . PHP_EOL;
    } else {
        echo "False" . PHP_EOL;
    }
}

// 1.
testGetMax(6, [3,2,1,5,6,4]);

// 2.
testGetMax(11, [7,8,2,3,1,7,8,11,4,3,2]);

// 3.
testGetMax(353, [34,35,64,34,10,2,14,5,353,23,35,63,23]);

// 4.
testGetMax(1, [1]);