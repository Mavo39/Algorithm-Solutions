<?php 

function isPangram(string $string): bool{
    // 文字列が空の場合
    if(empty($string)) return false;
    // キャッシュを作成
    $cache = array_fill(0, 26, 0);

    // 1文字ずつ取得し、文字コードを使ってキャッシュを更新
    for ($i = 0; $i < strlen($string); $i++){
        // 文字列を小文字に変換したあと、ASCIIコードに変換
        $ascii = ord(strtolower($string[$i]));
        // a-zのみキャッシュを更新
        if ($ascii >= 97 && $ascii <= 122) $cache[$ascii - 97] = 1;
    }
    
    // 0が一つもなかったら全ての文字が存在することになる
    return min($cache) != 0;
}

// 自分で実装したコード
// function isPangram(string $string): bool{
//     // 文字列が空の場合
//     if(empty($string)) return false;
//     // スペースを削除
//     $newString = str_replace(" ", "", $string);
//     // キャッシュを用意
//     $cache = [];

//     for($i = 0; $i < strlen($newString); $i++){
//         $ascii = ord($newString[$i]);
//         // a-zの範囲内にあるものに限定する
//         if($ascii >= 97 && $ascii <= 122){
//             // キャッシュにある場合
//             if($cache[$newString[$i]]) continue;
//             // キャッシュにない場合
//             array_push($cache, chr($ascii));
//         }
//     }

//     return count($cache) === 26;
// }