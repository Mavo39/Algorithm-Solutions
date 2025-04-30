function shuffledPositions(arr, shuffledArr){
    // エッジケース
    if(arr.length <= 0) return [];
    if(shuffledArr.length <= 0){
        let newArr = [];
        for(let i = 0; i < arr.length; i++){
            newArr.push(i);
        }
        return newArr;
    }

    let hashmap = {};
    let res = [];

    // hashmapにshuffledArrのキーとインデックスをセット
    for(let i = 0; i < shuffledArr.length; i++){
        hashmap[shuffledArr[i]] = i;
    }

    // resにシャッフル後のインデックスを格納
    for(let i = 0; i < arr.length; i++){
        res.push(hashmap[arr[i]]);
    }

    return res;
}

module.exports = shuffledPositions;