<?php

function websitePagination(array $urls, int $pageSize, int $page): array{
    // urlsが空の場合 または pageSizeが0以下のとき
    if(empty($urls) || $pageSize <= 0 || $page <= 0) return [];

    // 切り取り開始インデックス
    // (page-1):インデックスを表現
    // pageSizeをかけることで開始位置を特定できる
    $start = ($page - 1) * $pageSize;
    // array_slice()を使う
    return array_slice($urls, $start, $pageSize);
}