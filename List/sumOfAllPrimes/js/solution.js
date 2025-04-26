function sumOfAllPrimes(n){
    // 引数のチェック
    if(n < 0) return -1;

    let cache = [];
    // 0と1をfalseに設定
    cache.push(false, false);

    for(let i = 2; i <= n; i++){
        cache.push(true);
    }
    // cache配列で2以上の倍数になるものをfalseに変更していく
    for(let currentPrime = 2; currentPrime <= Math.ceil(Math.sqrt(n)); currentPrime++){
        // falseであれば次の処理にスキップする
        if(!cache[currentPrime]) continue;
        let i = 2;
        let ip = i * currentPrime;
        while(ip < n){
            cache[ip] = false;
            i++;
            ip = i * currentPrime;
        }
    }
    // cache内のtrueを足していく
    let sum = 0;
    for(let i = 2; i <= n; i++){
        if(cache[i]) sum += i;
    }

    return sum;
}

module.exports = sumOfAllPrimes;