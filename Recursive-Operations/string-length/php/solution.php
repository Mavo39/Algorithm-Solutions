<?php

function lenString(string $string): int{
    return lenStringHelper($string, 0);
}

// 文字数を再帰的に処理するヘルパー関数
function lenStringHelper(string $string, int $count): int{
    // ベースケース:文字列が空になるとき
    if($string == ""){
        return $count;
    }
    // 再帰ケース:文字数を減らす処理(1文字目を切り取る)
    return lenStringHelper(substr($string, 1), $count + 1);
}
