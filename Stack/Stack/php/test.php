<?php 

require_once './Item.php';
require_once './Stack.php';

$s1 = new Stack();
$s1->push(2);
echo $s1->peek() . PHP_EOL;
$s1->push(4);
$s1->push(3);
$s1->push(1);
echo $s1->pop() . PHP_EOL;
echo $s1->peek() . PHP_EOL;

$s2 = new Stack();
$s2->pop();
$s2->push(9);
$s2->push(8); 
echo $s2->peek() . PHP_EOL;