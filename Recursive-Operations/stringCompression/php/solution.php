<?php

function stringCompression($s) {
    return stringCompressionHelper($s, 1, $s[0], 1);
}

// count -> 文字が連続している回数
// currentChar -> 現在処理中の文字を保持する変数
function stringCompressionHelper(string $s, int $index, string $currentChar, int $count): string{
    // ベースケース: 文字列の終わりに達した場合
    if ($index >= strlen($s)) {
    // 最後の文字とそのカウントを返す
        return $count > 1 ? $currentChar . (string)$count : $currentChar;
    }
    // 再帰ケース: 2パターン
    // 1.現在の文字が前の文字と同じ場合
    if ($s[$index] == $currentChar) {
        // カウントを増やして次の文字へ
        return stringCompressionHelper($s, $index + 1, $currentChar, $count + 1);
    } else {
    // 2. 現在の文字が前の文字と異なる場合
    // これまでの文字とカウントを結果に追加し、新しい文字を処理
        $compressedPart = $count > 1 ? $currentChar . (string)$count : $currentChar;
        return $compressedPart . stringCompressionHelper($s, $index + 1, $s[$index], 1);
    }
}

// $count > 1 -> 文字が2回以上連続している

// // うまくいかなかった過去のコード↓
// function stringCompression(string $s): string{
//     return stringCompressionHelper($s, 0);
// }
//  
// // ある文字が連続した回数と文字をつなげる関数（1文字まで）
// function stringCompressionHelper(string $s, int $count): string{
//     $string = stringCompressionByOne($s, $count);
//     // ベースケース:次の文字と異なったとき、または文字列の最後に達したとき
//     if(strlen($string) <= 1){
//         return $string;
//     } else if($string[0] !== $string[1]){
//         return $string[0] . (string)($count + 1);
//     }
//     // 再帰ケース:インデックス番号を増やして、文字列を比較する処理
//     return stringCompressionHelper(substr($string, 1), $count + 1);
// }

// function stringCompressionByOne(string $s, int $count): string{
//     // ベースケース:次の文字と異なったとき、または文字列の最後に達したとき
//     if(strlen($s) <= 1){
//         return $s;
//     } else if($s[0] !== $s[1]){
//         return $s[0] . (string)($count + 1);
//     }
//     // 再帰ケース:インデックス番号を増やして、文字列を比較する処理
//     return stringCompressionHelper(substr($s, 1), $count + 1);
// }

//  012345
// "aaabbb"
//  01
// "aabbb"
//  01
// "abbb"
//  01 -> このときに"a3"を返す
// "bbb"
//  01
// "bb"
//  01
// "b" 
//  0 -> このとき文字列を返す = 次の文字が存在しないとき = $s[1] == ""

// ヘルパー関数を1つでやっているから詰まっている可能性

// 連続する文字がないときは、その文字を返す

// 必要な処理
// 1.文字列が連続して同じかどうかを確かめる
// 2.出力された文字列を連結する
// 3.文字が異なった場合に、残りの文字列を切り取る

// 関数の目的 -> ある文字列の最初の文字と、その後に続く文字を順番に比較していくこと
// 次の文字と異なったとき、または文字列の最後に達したときに処理終了 -> ベースケース

// ベースケースが原因:この状態だと、仮に文字がずっと連続してしまうと終わらない可能性が出てしまう
// 変化していくもの
// インデックス番号・連続した回数・文字列
// ベースケース:前の文字と異なったとき
// ベースケース:インデックス番号が文字列の長さを超えたとき
// 再帰ケース: その文字と次の文字が同じかどうかを判定し、カウントしてきた数をその文字の後ろに連結する
// 2文字の比較で1セット
// 文字とカウントした数字を返す

// 何文字目か -> index+1で求めることができる -> 新たな引数としては設定しなくていい
// 1文字の場合はそのまま文字を返す

// 課題
// 文字を連結するときに、次の文字まで連結されてしまう

// やってみたこと
// $outputに文字とその文字が登場した回数分、数字が増える
// (例)a1 -> a2 -> a3...
// 問題点 -> 数字だけでなく、文字まで再帰処理のたびに連結されてしまう
// (例)a1a2a3...
// 文字列は1個、カウントは1回？
