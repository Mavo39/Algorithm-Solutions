<?php
require_once './solution.php';

$assignment = new Files("assignment", ".word", "ABCDEFGH", "homework");
var_dump($assignment->getLifetimeBandwidthSize()) . PHP_EOL;
var_dump($assignment->prependContent("MMM")) . PHP_EOL;
var_dump($assignment->addContent("hello world", 5)) . PHP_EOL;
var_dump($assignment->showFileLocation()) . PHP_EOL;

$blade = new Files("blade", ".txt", "bg-primary text-white m-0 p-0 d-flex justify-content-center", "view");
var_dump($blade->getLifetimeBandwidthSize()) . PHP_EOL;
var_dump($blade->addContent("font-weight-bold ", 11)) . PHP_EOL;
var_dump($blade->showFileLocation()) . PHP_EOL;