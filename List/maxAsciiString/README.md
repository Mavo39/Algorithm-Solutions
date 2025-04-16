# 文字列のリスト stringList を受け取り、文字列の中で、各文字の ASCII 値の合計が最大になるインデックスを返す関数 maxAscilString(stringList) を定義する問題

## 条件
・ASCIIコードの合計値が場合はインデックスが小さい方を優先すること<br>
・大文字は小文字に変換して使用すること<br>

## 関数の入出力例
入力のデータ型： `string[] stringList`<br>
出力のデータ型： `integer`<br>

## テストケース
`maxAscilString(["Fantastic","Bridge","Superior","Fantastic","Operator"]) --> 0`<br>
`maxAscilString(["HeLlo","HelLo","bridge"]) --> 2`<br>
`maxAscilString(["eatDjrPNbj","IehUUSEMVe","hpcbBvlTOc","egvnPZgyCh"]) --> 3`<br>
`maxAscilString(["egvnPZgyCh","bridge","Fantastic"]) --> 0`<br>

## 思考プロセス
・文字列のASCIIコードの合計値を求める関数 と 文字列リストの合計値を比較する関数をわけて定義しよう<br>
→ まずは文字列内の各文字のASCIIコードを求めて、合計を管理する変数に加えていく<br>
→ 文字列リストの合計値を比較する関数内で、最初の要素インデックス0を最大値として比較していく<br>

## 感想
・特に引っかかる箇所はなかった<br>

## 改善点
・<br>