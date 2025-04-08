// 引数の文字列のASCII合計値を比較する関数
function isFirstStringLarger(s1, s2){
    const sumOfS1 = sumOfAscii(s1);
    const sumOfS2 = sumOfAscii(s2);

    return sumOfS1 > sumOfS2;
}

// ASCIIコードの合計を求める関数
function sumOfAscii(s){
    // 合計値を管理する変数
    let sum = 0;
    // 引数sが0文字のとき
    if(s.length <= 0) return sum;
    // 文字列を小文字に変換
    let lowerS = s.toLowerCase();
    // 各文字のASCIIコードを求めsumに加算していく
    for(let i = 0; i < lowerS.length; i++){
        sum += lowerS.charCodeAt(i);
    }
    return sum;
}

module.exports = isFirstStringLarger;