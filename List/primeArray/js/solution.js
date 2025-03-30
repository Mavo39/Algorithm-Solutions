function primeArray(n){
    let res = [];
    for(let i = 0; i <= n; i++){
        if(isPrime(i)) res.push(i);
    }
    return res;
}

// 素数かどうか判定
function isPrime(n){
    // 素数は2以上であるため、2からループスタート
    for(let i = 2; i < n; i++){
        // 割り切れる数字は素数対象外
        if(n % i == 0) return false;
    }
    // 割り切れない、かつ、素数の条件である1より大きいとき、素数と判定
    return n > 1;
}

module.exports = primeArray;