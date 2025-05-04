function firstRepeatingNumber(nums){
    // 引数のチェック
    if(nums.length === 0) return -1;
    // ハッシュマップの作成
    let hashmap = {};
    for(let i = 0; i < nums.length; i++){
        // キーが存在しないとき
        if(hashmap[nums[i]] === undefined) hashmap[nums[i]] = 1;
        // キーが存在するとき
        else hashmap[nums[i]] = hashmap[nums[i]] + 1;
    }
    // キーの取り出し
    let keys = Object.keys(hashmap);
    // ハッシュマップ内で2回以上出現する要素を探す
    for(let i = 0; i < keys.length; i++){
        if(hashmap[nums[i]] >= 2) return nums[i];
    }
    return -1;
}

module.exports = firstRepeatingNumber;