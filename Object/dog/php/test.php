<?php
require_once './solution.php';

$goldenRetriever = new Dog("Golden Retriever", 60, 10);

var_dump($goldenRetriever->bark()) . PHP_EOL;
var_dump($goldenRetriever->calcHumanAge()) . PHP_EOL;

$siberianHusky = new Dog("siberianHusky", 55, 6);
var_dump($siberianHusky->bark()) . PHP_EOL;
var_dump($siberianHusky->calcHumanAge()) . PHP_EOL;

$poodle = new Dog("poodle", 10, 1);
var_dump($poodle->bark()) . PHP_EOL;
var_dump($poodle->calcHumanAge()) . PHP_EOL;

$shibaInu = new Dog("shibaInu", 35, 4);
var_dump($shibaInu->bark()) . PHP_EOL;
var_dump($shibaInu->calcHumanAge()) . PHP_EOL;
