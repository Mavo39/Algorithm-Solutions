function evenRange(a,b){
    let evenList = [];
    for(let i = a; i <= b; i++){
        if(isEven(i)) evenList.push(i);
    }
    return evenList;
}

// 2の倍数かどうかを判定する関数
function isEven(num){
    return num % 2 == 0;
}

module.exports = evenRange;

// DeepSeekによる改善案：ループ回数を半分にする
// function evenRange(a, b) {
//     const evenList = [];
//     const start = a % 2 === 0 ? a : a + 1; // 最初の偶数を見つける
//     for (let i = start; i <= b; i += 2) {
//         evenList.push(i);
//     }
//     return evenList;
// }