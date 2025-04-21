<?php 

require_once './solution.php';

var_dump(isMountain([1,2,3,2])) . PHP_EOL;
var_dump(isMountain([1,2])) . PHP_EOL;
var_dump(isMountain([2,1])) . PHP_EOL;
var_dump(isMountain([1,2,2,2,2])) . PHP_EOL;
var_dump(isMountain([1,2,3])) . PHP_EOL;
var_dump(isMountain([4,3,2,1])) . PHP_EOL;
var_dump(isMountain([1,2,2,2,3,2])) . PHP_EOL;
var_dump(isMountain([3,2,2,2,1,1])) . PHP_EOL;
var_dump(isMountain([10,20,30,400,500,10])) . PHP_EOL;
var_dump(isMountain([100,200,100,400,500,100])) . PHP_EOL;
var_dump(isMountain([100,200,300,200,100,300])) . PHP_EOL;
var_dump(isMountain([100,50,100,200,300,400])) . PHP_EOL;
var_dump(isMountain([53,158,477,994,994,867,797,755,744,621,616])) . PHP_EOL;