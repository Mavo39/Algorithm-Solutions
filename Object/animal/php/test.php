<?php
require_once './solution.php';

$rabbit = new Animal("rabbit", 10, 0.3, false, 20);
var_dump($rabbit->getBmi()) . PHP_EOL;
var_dump($rabbit->isDangerous()) . PHP_EOL;

$snake = new Animal("snake", 30, 1, true, 30);
var_dump($snake->isDangerous()) . PHP_EOL;
var_dump($snake->getDailyCalories()) . PHP_EOL;

$elephant = new Animal("elephant", 300, 3, false, 5);
var_dump($elephant->getBmi()) . PHP_EOL;
var_dump($elephant->getDailyCalories()) . PHP_EOL;

$gazelle = new Animal("gazelle", 50, 1.5, false, 100);
var_dump($gazelle->getDailyCalories()) . PHP_EOL;
var_dump($gazelle->isDangerous()) . PHP_EOL;