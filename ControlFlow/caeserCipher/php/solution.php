<?php

function caesarCipher(string $message, int $n): string{
    $string = str_replace(" ", "", $message);
    $newMessage = "";

    for($i = 0; $i < strlen($string); $i++){        
        $newMessage .= converter($string[$i], $n % 26);
    }
    return $newMessage;
}

// 文字をシフトさせる関数
function converter(string $char, int $n): string{
    $ascii = ord($char);
    $shifted = $ascii + $n > 122 ? $ascii + $n - 26 : $ascii + $n;

    return chr($shifted);
}