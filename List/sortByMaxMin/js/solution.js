function sortByMaxMin(arr){
    // 配列のチェック
    if(arr.length <= 0) return [];

    // 昇順にソート
    arr.sort((a,b) => a - b);
    
    // 結果を格納する配列
    let res = [];
    const l = arr.length;
    // 配列の真ん中のインデックス
    const middleIndex = Math.floor(arr.length / 2);

    // 配列の要素数が奇数だった場合（リファクタリング前）
    // if(l % 2 == 1) middle = arr[middleIndex];
    // else middle = null;

    // 配列の要素数が奇数だった場合（リファクタリング後）
    // 変数宣言の追加 と 三項演算子による表現
    const middle = (l % 2 == 1) ? arr[middleIndex] : null;


    // ソートされた配列の後ろから値を格納する処理 と 配列の前から値を格納する処理を同時に配列の真ん中まで行なう
    // push(): 配列の末尾に追加
    for(let i = 0; i < middleIndex; i++){
        res.push(arr[l-i-1]);
        res.push(arr[i]);
    }
    // 配列の要素数が奇数だった場合、真ん中の数値を配列に追加する
    if(l % 2 == 1) res.push(middle);
    
    return res;
}

module.exports = sortByMaxMin;