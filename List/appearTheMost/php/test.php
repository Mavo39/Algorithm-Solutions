<?php 

require_once './solution.php';

echo json_encode(appearTheMost([1,1,2,2,3,3,3,4,5,6])) . PHP_EOL;
echo json_encode(appearTheMost([12,10,9,8,6,3,8,9,9,10])) . PHP_EOL;
echo json_encode(appearTheMost([1,1,1,3,3,3,2,2,2,5])) . PHP_EOL;
echo json_encode(appearTheMost([1,2])) . PHP_EOL;
echo json_encode(appearTheMost([100])) . PHP_EOL;
echo json_encode(appearTheMost([1,22,48,500,3000,10000,30,30,30])) . PHP_EOL;
