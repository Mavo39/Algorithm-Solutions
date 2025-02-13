function middleSubstring(stringInput){
    // 文字列の長さ
    let len = stringInput.length;
    // 切り取られる文字の長さ
    let cutString = Math.floor(len / 2);
    // 切り取り開始位置（インデックス番号）
    let index = Math.ceil(cutString / 2);

    if(len <= 2) return stringInput[0];
    else return stringInput.substring(index, index + cutString);
}

module.exports = middleSubstring;