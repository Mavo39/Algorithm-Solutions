// ループ
function decimalToHexadecimal(decNumber){
    let hexadecimal = "0123456789ABCDEF"; // 16進数で使用する文字列
    let hex = "";
    let currentHex = 0;

    while(currentHex >= 0){
        currentHex = decNumber % 16; // 最下位桁を取得
        hex = hexadecimal[currentHex] + hex; // 桁を逆順に追加
        decNumber = Math.floor(decNumber / 16); // 次の桁に進む
        if(decNumber == 0){
            break;
        }
    } 
    return hex;
}

// メソッド
// 16進数に変換し、小文字を大文字に変換する
// function decimalToHexadecimal(decNumber){
//     return decNumber.toString(16).toUpperCase();
// }

module.exports = decimalToHexadecimal;