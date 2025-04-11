<?php

require_once './solution.php';

echo json_encode(generateAlphabet('a','z')) . PHP_EOL;
echo json_encode(generateAlphabet('b','b')) . PHP_EOL;
echo json_encode(generateAlphabet('C','Z')) . PHP_EOL;
echo json_encode(generateAlphabet('M','z')) . PHP_EOL;
echo json_encode(generateAlphabet('z','a')) . PHP_EOL;