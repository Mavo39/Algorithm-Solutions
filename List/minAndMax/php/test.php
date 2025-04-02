<?php

require_once './solution.php';

// json形式での使用を想定していないが、出力をテストケースに合わせるために使用してみた
echo json_encode(minAndMax([5,3,2,3,4])) . PHP_EOL;
echo json_encode(minAndMax([5,3])) . PHP_EOL;
echo json_encode(minAndMax([5,0,1])) . PHP_EOL;
echo json_encode(minAndMax([5,5,5,5,5])) . PHP_EOL;
echo json_encode(minAndMax([10,80,40,60,70])) . PHP_EOL;
echo json_encode(minAndMax([700,500,300,900,600,80,320,780,1000])) . PHP_EOL;
