<?php
require_once './solution.php';

$product1 = new Product("shampoo", 10);
$product2 = new Product("conditioner", 5);
$product3 = new Product("tooth brush", 3);

$firstItem = new InvoiceItem($product1, 7);
$secondItem = new InvoiceItem($product2, 9);
$thirdItem = new InvoiceItem($product3, 10);

$firstItem->next = $secondItem;
$secondItem->next = $thirdItem;

$invoice = new Invoice ("UC1234567890", $firstItem);
var_dump($invoice->amountDue(false)) . PHP_EOL; // 70 + 45 + 30 = 145
var_dump($invoice->amountDue(true)) . PHP_EOL; // 145 + 14.5