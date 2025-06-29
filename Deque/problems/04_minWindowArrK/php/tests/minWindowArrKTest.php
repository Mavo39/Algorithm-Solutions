<?php 

require_once __DIR__ . '/../src/minWindowArrK.php';

// 1.
echo json_encode(minWindowArrK([2,3,1,1,12,3,10],1)) . PHP_EOL;

// 2.
echo json_encode(minWindowArrK([2,3,1,1,12,3,10],3)) . PHP_EOL;

// 3.
echo json_encode(minWindowArrK([2,3,1,1,12,3,10],4)) . PHP_EOL;

// 4.
echo json_encode(minWindowArrK([3,9,10,2,4,5],3)) . PHP_EOL;

// 5.
echo json_encode(minWindowArrK([3,9,10,2,4,5],5)) . PHP_EOL;

// 6.
echo json_encode(minWindowArrK([30,50,60,20,30,64,80],3)) . PHP_EOL;

// 7.
echo json_encode(minWindowArrK([30,50,60,20,30,64,80],2)) . PHP_EOL;

// 8.
echo json_encode(minWindowArrK([24,5,67,60,24,64,23,536,345],3)) . PHP_EOL;