<?php 

// インデックス0を追っていき、要素の最後のインデックスまで到達すればtrueとなるように設計する
function isMountain(array $height): bool{
    $l = count($height);
    // 要素数が3未満の場合
    if($l < 3) return false;

    // 要素のインデックスを管理する変数
    $i = 1;
    // whileループで今の要素が1つ前の要素より大きい場合（上昇局面）
    while($i < $l && $height[$i] > $height[$i-1]){
        $i++;
    }
    // インデックスがインクリメントされていない または 最後のインデックスまで到達した場合
    if($i == 1 || $i == $l){
        return false;
    }
    // whileループで今の要素が1つ前の要素より小さい場合（下降局面）
    while($i < $l && $height[$i] < $height[$i-1]){
        $i++;
    }
    // 最後のインデックスに到達したかどうか
    return $i == $l;
}