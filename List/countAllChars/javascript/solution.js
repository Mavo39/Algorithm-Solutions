function countAllChars(arr){
    let length = arr.length;
    // 空配列の場合
    if(length == 0) return -1;

    let total = 0;
    for(let i = 0; i < arr.length; i++){
        total += arr[i].length;
    }
    return total;
}

module.exports = countAllChars;