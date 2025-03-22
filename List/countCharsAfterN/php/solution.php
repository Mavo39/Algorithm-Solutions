<?php

// 直接ネストせずに実装
function countCharactersAfterN(array $arr): int{
    $total = 0;
    for($i = 0; $i < count($arr); $i++){
        $total += countCharsAfterNInString($arr[$i]);
    }
    return $total;
}

// 文字列内の n 以降の文字をカウント
function countCharsAfterNInString(string $string): int{
    $count = 0;
    for($i = 0; $i < strlen($string); $i++){
        if(ord($string[$i]) >= ord('n')) $count++;
    }
    return $count;
}

// 関数呼び出しのオーバーヘッドが生じる可能性がある。