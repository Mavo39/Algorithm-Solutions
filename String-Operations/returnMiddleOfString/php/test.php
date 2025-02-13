<?php

require_once 'solution.php';

var_dump(middleSubstring("A")); // string(1) "A"
var_dump(middleSubstring("AB")); // string(1) "A"
var_dump(middleSubstring("ABC")); // string(1) "B"
var_dump(middleSubstring("ABCD")); // string(2) "BC"
var_dump(middleSubstring("ABCDE")); // string(2) "BC"
var_dump(middleSubstring("ABCDEF")); // string(3) "CDE"
var_dump(middleSubstring("ABCDEFG")); // string(3) "CDE"
var_dump(middleSubstring("ABCDEFGH")); // string(4) "CDEF"
var_dump(middleSubstring("ABCDEFGHI")); // string(4) "CDEF"
var_dump(middleSubstring("ABCDEFGHIJ")); // string(5) "DEFGH"
var_dump(middleSubstring("ABCDEFGHIJK")); // string(5) "DEFGH"
var_dump(middleSubstring("ABCDEFGHIJKL")); // string(6) "DEFGHI"
var_dump(middleSubstring("fundamental")); // string(5) "damen"