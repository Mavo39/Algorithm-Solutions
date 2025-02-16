<?php

function recursiveIsPrime(int $n): bool {
    // 2未満の場合は素数ではない
    if ($n < 2) {
        return false;
    }
    // 2以上を考えていく
    return recursiveIsPrimeHelper($n, 2);
}

// 素数かどうかを判定するヘルパー関数
function recursiveIsPrimeHelper(int $n, int $i): bool {
    // ベースケース1: iの平方がnを超えた場合、素数と判定
    if ($i * $i > $n) {
        return true;
    }
    // ベースケース2: nがiで割り切れた場合、素数ではない
    if ($n % $i == 0) {
        return false;
    }
    // 再帰ケース: 次のiを試す
    return recursiveIsPrimeHelper($n, $i + 1);
}
