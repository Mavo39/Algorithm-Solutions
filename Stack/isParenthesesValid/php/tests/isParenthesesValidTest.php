<?php 

require_once __DIR__ . '/../src/isParenthesesValid.php';

// 1.
echo json_encode(isParenthesesValid("{}")) . PHP_EOL;

// 2.
echo json_encode(isParenthesesValid("[{}]")) . PHP_EOL;

// 3.
echo json_encode(isParenthesesValid("[{(]")) . PHP_EOL;

// 4.
echo json_encode(isParenthesesValid("(){}[]")) . PHP_EOL;

// 5.
echo json_encode(isParenthesesValid("((()(())))")) . PHP_EOL;

// 6.
echo json_encode(isParenthesesValid("[{(}])")) . PHP_EOL;

// 7.
echo json_encode(isParenthesesValid("]][}{({()){}(")) . PHP_EOL;

// 8.
echo json_encode(isParenthesesValid("{(([])[])[]}[]")) . PHP_EOL;

// 9.
echo json_encode(isParenthesesValid("{(([])[])[]]}")) . PHP_EOL;

// 10.
echo json_encode(isParenthesesValid("{{[[(())]]}}")) . PHP_EOL;