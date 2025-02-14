function lenString(string){
    return lenStringHelper(string, "", 0);
}

// 文字数を返すヘルパー関数
function lenStringHelper(string, res, count){
    // ベースケース:部分文字列が文字列と一致したとき
    if(string == res){
        return count;
    }
    // 再帰ケース:文字列が1文字ずつ増えていく
    return lenStringHelper(string, res + string[count], count + 1);
}

module.exports = lenString;
// スタックオーバーフローが起きた => ベースケースが不適格 or 再帰が深い