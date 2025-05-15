<?php 

require_once './solution.php';

var_dump(hasSameType("aabb","yyza")) . PHP_EOL;
var_dump(hasSameType("aappl","bbtte")) . PHP_EOL;
var_dump(hasSameType("aappl","bbttb")) . PHP_EOL;
var_dump(hasSameType("aabb","abab")) . PHP_EOL;
var_dump(hasSameType("aappl","bktte")) . PHP_EOL;
var_dump(hasSameType("aaapppl","bbbttke")) . PHP_EOL;
var_dump(hasSameType("abcd","tso")) . PHP_EOL;
var_dump(hasSameType("abcd","jklm")) . PHP_EOL;
var_dump(hasSameType("aaabbccdddaa","jjjddkkpppjj")) . PHP_EOL;
var_dump(hasSameType("aaabbccdddaa","jjjddkkpppjd")) . PHP_EOL;