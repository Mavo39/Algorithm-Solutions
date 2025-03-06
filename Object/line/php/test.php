<?php
require_once './solution.php';

$a = new Point(3, 1);
$b = new Point(3, 6);
$lineAB = new Line($a, $b);
var_dump($lineAB->getLength()) . PHP_EOL;

$c = new Point(1, 3);
$d = new Point(6, 15);
$lineCD = new Line($c, $d);
var_dump($lineCD->getLength()) . PHP_EOL;