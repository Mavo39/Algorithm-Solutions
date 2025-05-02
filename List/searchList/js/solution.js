function searchList(numList, value){
    // 配列が空のケース
    if(numList.length === 0) return -1;

    // ハッシュマップの作成
    let hashmap = {};
    for(let i = 0; i < numList.length; i++){
        // ハッシュマップに既存のキーが存在しないときのみ処理
        if(hashmap[numList[i]] === undefined) hashmap[numList[i]] = i;
    }

    return hashmap[value] !== undefined ? hashmap[value] : -1;
}

module.exports = searchList;