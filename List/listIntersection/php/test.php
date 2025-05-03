<?php 

require_once './solution.php';

echo json_encode(listIntersection([1,2,3,4,5,6],[1,4,4,5,8,9,10,11])) . PHP_EOL;
echo json_encode(listIntersection([3,4,5,10,2,20,4,5],[4,20,22,2,2,2,10,1,4])) . PHP_EOL;
echo json_encode(listIntersection([2,3,4,54,10,5,9,11],[3,10,23,10,0,5,9,2])) . PHP_EOL;