function countCharactersAfterN(arr){
    let count = 0;
    // 配列内の要素の走査
    for(let i = 0; i < arr.length; i++){
        // 要素の文字列を走査
        for(let j = 0; j < arr[i].length; j++){
            if(arr[i].charCodeAt(j) >= 110 && arr[i].charCodeAt(j) <= 122){
                count++;
            }
        }
    }
    return count;
}

module.exports = countCharactersAfterN;