function perfectNumberList(n){
    let res = '';

    for(let i = 2; i <= n; i++){
        if(isPerfectNumber(i)){
            res += `-${i}`;
        }
    }
    return res == '' ? 'none' : res.substring(1);
}

// 完全数かどうかを求める関数
function isPerfectNumber(n){
    let divisor = 1;
    // 約数を求める際に、平方根の性質を使う:最後まで調べない
    for(let i = 2; i * i <= n; i++){ 
        if(n % i == 0){
            divisor += i;      // 約数
            divisor += n / i;  // 約数iのペア
        }
    }
    return divisor == n;
}

module.exports = perfectNumberList;