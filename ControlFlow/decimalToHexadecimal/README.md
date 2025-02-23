# 正の 10 進数 decNumber が与えられるので、16 進数に書き換える decimalToHexadecimal という関数を作成する問題

## 関数の入出力例  
- **入力のデータ型**：`integer decNumber`  
- **出力のデータ型**：`string`  

## テストケース
`decimalToHexadecimal(532454) --> 81FE6`<br>
`decimalToHexadecimal(90304) --> 160C0`<br>
`decimalToHexadecimal(28394) --> 6EEA`<br>
`decimalToHexadecimal(15) --> F`<br>
`decimalToHexadecimal(74) --> 4A`<br>

## 解き方
①ループ<br>
・16進数で使用する数字を文字列として管理し、そのインデックスを活用する。<br>
・最下位桁の数字を取得するためのインデックスを求める。<br>
・次の桁に進めるための処理を行なう。<br>
②メソッド<br>
・16進数に変換した後、大文字に変換する。<br>

## 気づき
・16進数に変換できるメソッドがあることを知った。<br>

## 試したこと
・文字列の先頭に追加されていくように変数の位置に注意したこと。<br>
・メソッドを使った実装。<br>
