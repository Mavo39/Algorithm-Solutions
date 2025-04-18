// 文字列を逆表示する
// 配列と配列の最初と最後のインデックスを引数とする
function reverseInplace(arr, start, end){
    // 反転する操作の折り返し地点となる配列の真ん中のインデックスを求める
    let middle = Math.floor((start + end) / 2);

    // 配列の真ん中までループを行なう
    // 反転の起点は真ん中であるため、真ん中まで処理すればいい
    for(let i = start; i <= middle; i++){
        // 反転の対象となる要素の反対側に位置するインデックスを求める
        // ex. [1,2,3,4,5] -> 1の反対サイドは5, 2の反対サイドは4
        // oppositeで反対サイドのインデックスを管理する
        let opposite = start + (end - i);
        let temp = arr[i];
        arr[i] = arr[opposite];
        arr[opposite] = temp;
    }
}

// 指定位置だけローテーションする
function rotateByTimes(ids, n){
    // 何周もローテーションせず、あまりを使う（余りで求めた数だけ動かすことで計算量を削減する）
    let r = n % ids.length;
    if(r == 0) return ids;
    // 配列の最後のインデックスを変数として使用する
    let l = ids.length - 1;

    // 配列の最初から最後までローテーション
    reverseInplace(ids, 0, l);
    // 配列の最初からrの1つ手前までローテーション（1つ手前にしているのはインデックスであるため）
    reverseInplace(ids, 0, r-1);
    // 配列の残りの部分をローテーション
    reverseInplace(ids, r, l);

    return ids;
}

module.exports = rotateByTimes;