# アルファベットで構成される 2 つの文字列 s1 と s2 を引数として受け取り、s1 の ASCII 値の合計が s2 の ASCII 値の合計よりも大きい場合に True を、そうでない場合に False を返すisFirstLarger(s1,s2)という関数を実装する問題。
文字列内のアルファベットはすべて小文字として扱うこと。<br>
例えば、"abc" という言葉は、"a" が 97、"b" が 98、"c" が 99 と換算され、合計値は 294 となる。<br>

## 関数の入出力例
入力のデータ型： `string s1`, `string s2`<br>
出力のデータ型： `bool`<br>

## テストケース
`isFirstStringLarger("Fantastic","Bridge") --> true`<br>
`isFirstStringLarger("Bridge","Fantastic") --> false`<br>
`isFirstStringLarger("hello","HelLo") --> false`<br>
`isFirstStringLarger("Appearances may deceive","I think so too") --> true`<br>
`isFirstStringLarger("pool","pooling") --> false`<br>
`isFirstStringLarger("magni","est") --> true`<br>

## 思考プロセス
・二つの引数の文字列内のASCIIコードの合計値を求める必要がある<br>
→ 一つの関数の中で各引数のASCIIコードの合計値を求めるのはコードにダブりがでる<br>
→ 2つの引数の合計を比較する関数・文字列のASCIIコードの合計値を求める関数に分けて実装する<br>

## 計算量
JavaScript<br>
(予想)時間計算量：O(n) 空間計算量：O(1)<br>
(判断根拠)<br>
・時間計算量：sumOfAscii(s)の時間計算量は文字列の長さ分ループ( O(n) )しており、それを2回行なうため<br>
・空間計算量：追加のメモリ消費がないため<br>
(実際)時間計算量: O(n)・空間計算量: O(1)<br>


## 工夫したこと
・なるべくコードの重複がないように最初に実装の方向性を決めたこと<br>

## 改善点
・空文字列のチェックの方法をより厳格にすること<br>
→ `!s`で文字列ではないこと<br>
→ `s.length === 0`で空文字であること<br>
