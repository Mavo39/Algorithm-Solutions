<?php 

require_once __DIR__ . '/../src/isParenthesesValid.php';

# isParenthesesValidが正しく動作するか確認する関数
function isParenthesesValidTest(string $parentheses, bool $expected): void{
    $output = isParenthesesValid($parentheses);

    echo $output === $expected ? "true" : "false";
}

// 1.
isParenthesesValidTest("{}", true);

// 2.
isParenthesesValidTest("[{}]", true);

// 3.
isParenthesesValidTest("[{(]", false);

// 4.
isParenthesesValidTest("(){}[]", true);

// 5.
isParenthesesValidTest("((()(())))", true);

// 6.
isParenthesesValidTest("[{(}])", false);

// 7.
isParenthesesValidTest("]][}{({()){}(", false);

// 8.
isParenthesesValidTest("{(([])[])[]}[]", true);

// 9.
isParenthesesValidTest("{(([])[])[]]}", false);

// 10.
isParenthesesValidTest("{{[[(())]]}}", true);
