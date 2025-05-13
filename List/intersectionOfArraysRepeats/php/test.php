<?php 

require_once './solution.php';

echo json_encode(intersectionOfArraysRepeats([3,2,1],[3,2,1])) . PHP_EOL;
echo json_encode(intersectionOfArraysRepeats([1,1,1],[1,2,3,2,1])) . PHP_EOL;
echo json_encode(intersectionOfArraysRepeats([3,2,2,2,1,10,10],[3,2,10,10,10])) . PHP_EOL;
echo json_encode(intersectionOfArraysRepeats([2,19,11,2,6,8],[10,23,5,8,19])) . PHP_EOL;
echo json_encode(intersectionOfArraysRepeats([4,22,100,88,6,8],[1,2,3])) . PHP_EOL;
echo json_encode(intersectionOfArraysRepeats([-1,-2,-1,-1],[-1,-1,-2,-2])) . PHP_EOL;
echo json_encode(intersectionOfArraysRepeats([1,2,2,1],[2,2,2,1])) . PHP_EOL;
echo json_encode(intersectionOfArraysRepeats([4,9,5],[9,4,9,8,4])) . PHP_EOL;