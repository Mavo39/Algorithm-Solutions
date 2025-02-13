<?php
// 指定ファイルを一度だけ読み込み
require_once 'solution.php';

// var_dump()を使ってテストケースをデバッグ
var_dump(isPalindrome("kayak"));           
// bool(true)
var_dump(isPalindrome("recursion"));       
// bool(false)
var_dump(isPalindrome("Top spot"));        
// bool(true)
var_dump(isPalindrome("Was it a cat I saw")); 
// bool(true)
var_dump(isPalindrome("ad"));              
// bool(false)
