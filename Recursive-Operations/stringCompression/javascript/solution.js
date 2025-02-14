function stringCompression(s){
    return stringCompressionHelper(s, 0, 0, "");
}

// Two Pointerを使った実装
function stringCompressionHelper(s, left, right, output){
    // ベースケース:インデックス番号が文字列の長さを超えたとき
    if(left >= s.length) return output;
    
    // 再帰ケース
    // 今比較している文字が前の文字と同じとき
    if(right < s.length && s[right] == s[left]) return stringCompressionHelper(s, left, right + 1, output);
    
    // 以下、文字が異なるとき
    let count = right - left;
    // outputの出力内容を場合分け
    if(count > 1) output += s[left] + count;
    else output += s[left];
    // outputがわかり次第、leftにrightを代入する
    left = right;
    // 連続した回数が2以上のときと1文字のとき（連続しないとき）で返り値が異なる
    return stringCompressionHelper(s, right, right, output);
}

module.exports = stringCompression;