// リスト内の文字列のASCIIの合計値を比較する
function maxAsciiString(stringList){
    // 配列が空かどうかをチェック
    if(stringList.length <= 0) return -1;
    // リスト内の最初の要素を最大値・最大値を示すインデックスとして定義する
    let maxValue = sumOfAscii(stringList[0]);
    let maxIndex = 0;
    // リスト内の文字列を走査していく
    for(let i = 1; i < stringList.length; i++){
        let curr = stringList[i];
        if(sumOfAscii(curr) > maxValue){
            maxValue = sumOfAscii(curr);
            maxIndex = i;
        }
    }
    return maxIndex;
}

// 文字列内の文字のASCIIの合計値を求める
function sumOfAscii(string){
    let sum = 0;
    // 配列が空だったとき
    if(string.length <= 0) return sum;

    let lower = string.toLowerCase();

    for(let i = 0; i < lower.length; i++){
        sum += lower.charCodeAt(i);
    }

    return sum;
}

module.exports = maxAsciiString;