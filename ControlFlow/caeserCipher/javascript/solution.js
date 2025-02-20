function caesarCipher(message, n){
    let string = message.replace(/\s/g, ""); // スペースを削除
    let newMessage = "";

    for(i = 0; i < string.length; i++){
        newMessage += converter(string[i], n % 26); // %を使うことで循環を表現
    }
    return newMessage;
}

// 指定数だけ文字を移動させる関数
function converter(char, n){
    // ASCIIコードに変換
    let ascii = char.charCodeAt(0);
    // 移動後のASCIIコードを求める
    // 移動後のコードが 'z' (122) を超える場合、26を引いてアルファベットの最初に戻る
    let shifted = ascii + n > 122 ? ascii + n - 26 : ascii + n;
    // シフト後のASCIIコードを文字に変換して返す
    return String.fromCharCode(shifted);
}

module.exports = caesarCipher;