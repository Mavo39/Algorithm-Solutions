<?php

// forループ
function isPalindrome(string $stringInput): bool{
    // 初期設定:スペースをなくす処理・大文字を小文字にする処理
    $stringInput = strtolower(str_replace(" ", "", $stringInput));

    $strlen = strlen($stringInput);
    // 前と後ろから文字を一致するか検証する
    for($i = 0; $i < $strlen / 2; $i++){
        if($stringInput[$i] != $stringInput[$strlen - 1]){
            return false;
        }
        $strlen--;
    }
    return true;
}
