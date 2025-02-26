<?php

function twosComplement(string $bits): string{
    $oneComplement = oneComplement($bits);
    $result = "";
    $carry = 1;

    // キャリーを考慮するため、右から左に見ていく（各桁の検証)
    // インデックス番号の最後から0に向かって処理
    for($i = strlen($oneComplement)-1; $i >= 0; $i--){
        $bit = $oneComplement[$i]; 
        if($bit == 1 && $carry == 1){
            $result = "0" . $result;
        } else if($bit == 0 && $carry == 1){
            $result = "1" . $result;
            $carry = 0;   // キャリー解消
        } else {
            $result = $bit . $result;
        }
    }

    if($carry == 1){ // 最左端
        $result = "1" . $result;
    }
    return $result;
}

// 1の補数を求める関数
function oneComplement(string $bit): string{
    $output = "";
    for($i = 0; $i < strlen($bit); $i++){
        $output .= $bit[$i] == 0 ? "1" : "0";
    }
    return $output;
}
