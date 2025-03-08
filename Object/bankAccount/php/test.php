<?php
require_once './solution.php';

$user1 = new BankAccount("Chase", "Claire Simmmons", 30000);
var_dump($user1->withdrawMoney(2000)) . PHP_EOL;
var_dump($user1->depositMoney(10000)) . PHP_EOL;
var_dump($user1->pastime(93)) . PHP_EOL;

$user2 = new BankAccount("Bank Of America", "Remy Clay", 10000);
var_dump($user2->withdrawMoney(5000)) . PHP_EOL;
var_dump($user2->depositMoney(12000)) . PHP_EOL;
var_dump($user2->pastime(505)) . PHP_EOL;