function charFrequency(message){
    // 配列の初期化
    let res = [];
    // エッジケース
    if(message.length === 0) return [];
    // スペースの削除
    let newMessage = message.replace(" ", "").toLowerCase();
    // ハッシュマップ作成
    let hashmap = {};
    for(let i = 0; i < newMessage.length; i++){
        if(hashmap[newMessage[i]] === undefined) hashmap[newMessage[i]] = 1;
        else hashmap[newMessage[i]]++;
    }
    
    // ハッシュマップからキーを取り出し
    for(let key in hashmap){
        res.push(`${key} : ${hashmap[key]}`);
    }
    // 最後にアルファベット順にソート
    return res.sort();
}

module.exports = charFrequency;