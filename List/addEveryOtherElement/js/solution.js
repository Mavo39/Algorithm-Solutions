function addEveryOtherElement(intArr){
    let res = 0;

    // 配列が空だった場合
    if(intArr.length == 0) return res;

    // 偶数番目のインデックスが奇数番目になることを利用する
    for(let i = 0; i < intArr.length; i+=2){
        res += intArr[i];
    }
    return res;
}

module.exports = addEveryOtherElement;