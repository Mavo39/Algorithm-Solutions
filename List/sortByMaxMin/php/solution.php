<?php

function sortByMaxMin(array $arr): array{
    if(empty($arr)) return [];

    // 引数の配列を昇順にソート
    sort($arr);

    $res = [];
    $l = count($arr);
    // int型にキャスト: floor()だとfloat型になってしまうため
    $midIndex = (int)floor($l / 2);

    // ソート後の配列の真ん中の要素を取得: 配列の要素数が奇数だった場合にループ処理後に配列に追加する
    $mid = ($l % 2 == 1) ? $arr[$midIndex] : null;

    // 最大値と最小値を交互に新しい配列に格納していく
    for($i = 0; $i < $midIndex; $i++){
        $res[] = $arr[$l-$i-1];
        $res[] = $arr[$i];
    }

    // 配列の要素数が奇数の場合、配列の真ん中の数値を追加
    if($l % 2 == 1) $res[] = $mid;

    return $res;
}