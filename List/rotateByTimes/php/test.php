<?php

require_once './solution.php';

echo json_encode(rotateByTimes([1,2,3,4,5],2)) . PHP_EOL;
echo json_encode(rotateByTimes([1,2,3,4,5],5)) . PHP_EOL;
echo json_encode(rotateByTimes([10,12,3,4,5],3)) . PHP_EOL;
echo json_encode(rotateByTimes([4,23,104,435,5002,3],26)) . PHP_EOL;
echo json_encode(rotateByTimes([4,23,104,435,5002,3],0)) . PHP_EOL;
echo json_encode(rotateByTimes([4,23,104,435,5002,3],1)) . PHP_EOL;
echo json_encode(rotateByTimes([4,23,104,435,5002,3],2)) . PHP_EOL;
echo json_encode(rotateByTimes([2,3],1)) . PHP_EOL;