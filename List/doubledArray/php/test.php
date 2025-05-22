<?php 

require_once './solution.php';

echo json_encode(doubledArray([1,2,3,4,5])) . PHP_EOL;
echo json_encode(doubledArray([5,4,3,2,1])) . PHP_EOL;
echo json_encode(doubledArray([1,1,2,2,3,3])) . PHP_EOL;