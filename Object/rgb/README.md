# 以下の構造に沿った、色の設計図を作成し、テストケースを出力する問題。

## データ
`int red`: 0 から 255 までの数値<br>
`int green`: 0 から 255 までの数値<br>
`int blue`: 0 から 255 までの数値<br>
`String getHexCode()`: カラーコードを 16 進数（文字列）で返す。文字列の先頭には # をつけること。<br>
`String getBits()`: カラーコードを 2 進数で返す。取得した 16 進数を 2 進数へ変換する。<br>
`String getColorShade()`: 赤、青、緑の中でどの色が濃いのかを文字列で返す。全ての色の強さが同じ場合、grayscale と返す。もし複数の色が同じ最大値を持っていた場合（例：R:230, G:230, B:50）、最初に現れる最大値の色を返す。<br>

## テストケース
`color1 = new RGB(0, 153, 255)`<br>
`color1.getHexCode() --> #0099ff`<br>
`color1.getBits() --> 1001100111111111`<br>
`color1.getColorShade() --> blue`<br>

`color2 = new RGB(255, 255, 204)`<br>
`color2.getHexCode() --> #ffffcc`<br>
`color2.getBits() --> 111111111111111111001100`<br>
`color2.getColorShade() --> red`<br>

`color3 = new RGB(0, 87, 0)`<br>
`color3.getHexCode() --> #005700`<br>
`color3.getBits() --> 101011100000000`<br>
`color3.getColorShade() --> green`<br>

`gray = new RGB(123, 123, 123)`<br>
`gray.getHexCode() --> #7b7b7b`<br>
`gray.getBits() --> 11110110111101101111011`<br>
`gray.getColorShade() --> grayscale`<br>

## 解き方
・クラスを作成し、個別にインスタンスを作成する<br>
・10進数を16進数に変換する<br>
・toString(2) を使って10進数を2進数に変換し、padStart(8, '0') で8ビットに揃える<br>
・色の濃さを判断して返すためのif文を用意する<br>

## 試したこと
・正規表現を調べながら積極的に使ったこと<br>
・padStartメソッドを使って桁数を調整したこと<br>
・不要な0があったため、調べてltrim()を使ったこと<br>
