<?php
require_once './solution.php';

$product1 = new Product ("shampoo", 10);
var_dump($product1->title) . PHP_EOL;
var_dump($product1->price) . PHP_EOL;

$product2 = new Product ("conditioner", 5);
var_dump($product2->title) . PHP_EOL;
var_dump($product2->price) . PHP_EOL;