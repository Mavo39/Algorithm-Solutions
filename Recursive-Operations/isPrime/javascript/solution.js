function recursiveIsPrime(n){
    if(n == 1) return false;
    return recursiveIsPrimeHelper(n, 2);
}

function recursiveIsPrimeHelper(n, k){
    // ベースケース①:nの平方根がkより大きいとき、素数
    if(k ** 2 > n) return true;
    // ベースケース②:nがkで割れるとき、素数ではない
    if(n % k == 0) return false;
    // 再帰ケース:kを1ずつ増やしていく
    return recursiveIsPrimeHelper(n, k + 1);
}

module.exports = recursiveIsPrime;