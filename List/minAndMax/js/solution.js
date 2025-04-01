function minAndMax(intArr){
    let res = [];
    // 配列が空だった場合
    if(intArr.length === 0) return res;

    let sum = 0;
    let minIndex = 0;
    let maxIndex = 0;
    // 1回のループで合計値と最小値・最大値のインデックスを求める
    for(let i = 0; i < intArr.length; i++){
        sum += intArr[i];

        if(intArr[minIndex] > intArr[i]){
            minIndex = i;
        }
        if(intArr[maxIndex] < intArr[i]){
            maxIndex = i;
        }
    }
    res.push(sum - intArr[maxIndex], sum - intArr[minIndex])

    return res;
}

module.exports = minAndMax;