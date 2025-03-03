class RGB {
    constructor(red, green, blue) {
        this.red = red;
        this.green = green;
        this.blue = blue;
    }

    // 16進数カラーコードを返す
    getHexCode() {
        const redHex = this.red.toString(16).padStart(2, '0');   // 常に2桁にする
        const greenHex = this.green.toString(16).padStart(2, '0');
        const blueHex = this.blue.toString(16).padStart(2, '0');
        return `#${redHex}${greenHex}${blueHex}`;  // 結果を結合して返す
    }

    // 2進数表現を返す（先頭の0を省略）
    getBits() {
        const redBits = this.red.toString(2).padStart(8, '0');   // 8ビットに揃える
        const greenBits = this.green.toString(2).padStart(8, '0');
        const blueBits = this.blue.toString(2).padStart(8, '0');
        const fullBits = `${redBits}${greenBits}${blueBits}`;  // 結果を結合

        // 先頭の0を削除して返す
        return fullBits.replace(/^0+/, '');
    }

    // 色の濃さを判断して返す
    getColorShade() {
        if (this.red === this.green && this.green === this.blue) {
            return "grayscale";  // 全ての色が同じならgrayscale
        }
        if (this.red >= this.green && this.red >= this.blue) {
            return "red";  // 最初に赤が最大値ならred
        }
        if (this.green >= this.red && this.green >= this.blue) {
            return "green";  // 最初に緑が最大値ならgreen
        }
        return "blue";  // 最後に残るのは青が最大値の場合
    }
}

module.exports = RGB;