<?php

function listIntersection(array $targetList, array $searchList): array{
    // 交点を格納する配列
    $res = [];
    // エッジケース
    if(empty($targetList) || empty($searchList)) return $res;

    // ハッシュマップの作成
    $hashmap = [];
    for($i = 0; $i < count($searchList); $i++){
        if(!isset($hashmap[$searchList[$i]])){
            $hashmap[$searchList[$i]] = $searchList[$i];
        }
    }
    // targetListを走査
    for($i = 0; $i < count($targetList); $i++){
        if(isset($hashmap[$targetList[$i]]) && !in_array($targetList[$i], $res)){
            $res[] = $targetList[$i];
        }
    }
    sort($res);

    return $res;
}