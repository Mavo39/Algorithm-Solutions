<?php 

require_once './solution.php';

var_dump(hasSameStructure("abc","hello world")) . PHP_EOL;
var_dump(hasSameStructure("tut","hot mild cold")) . PHP_EOL;
var_dump(hasSameStructure("tut","hot mild mild")) . PHP_EOL;
var_dump(hasSameStructure("aabac","word word dictionary word word")) . PHP_EOL;
var_dump(hasSameStructure("aabac","word word dictionary word string")) . PHP_EOL;
var_dump(hasSameStructure("abcabc","soccer baseball tennis soccer baseball tennis")) . PHP_EOL;
var_dump(hasSameStructure("zabccabcz","book comic phone music music comic phone music book")) . PHP_EOL;
var_dump(hasSameStructure("zzz","math math math")) . PHP_EOL;