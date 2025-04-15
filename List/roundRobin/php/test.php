<?php

require_once './solution.php';

$luckyArrayOfBags = [[21,5,12,25],[100,88,354,643],[122,145,825,4],[228,674,777,77]];

echo json_encode(chooseNFromBags2d(10, $luckyArrayOfBags)) . PHP_EOL;