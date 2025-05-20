<?php 

require_once './solution.php';

echo json_encode(insertionSort([2,12,5,10,9,8])) . PHP_EOL;
echo json_encode(insertionSort([1,5,3,4,3,1,6])) . PHP_EOL;
echo json_encode(insertionSort([11,45,32,75,88,15,15])) . PHP_EOL;