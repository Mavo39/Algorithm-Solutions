<?php
require_once './solution.php';

$product1 = new Product ("shampoo", 10);
$product2 = new Product ("conditioner", 5);
$product3 = new Product ("tooth brush", 3);

$firstItem = new InvoiceItem($product1, 7);
$secondItem = new InvoiceItem($product2, 9);
$thirdItem = new InvoiceItem($product3, 10);

$firstItem->next = $secondItem;
$secondItem->next = $thirdItem;

var_dump($firstItem->getTotalPrice()) . PHP_EOL;
var_dump($secondItem->getTotalPrice()) . PHP_EOL;
var_dump($firstItem->next->getTotalPrice()) . PHP_EOL;
var_dump($firstItem->next->next->getTotalPrice()) . PHP_EOL;
var_dump($firstItem->next->product->price) . PHP_EOL;
var_dump($firstItem->next->next->product->title) . PHP_EOL;