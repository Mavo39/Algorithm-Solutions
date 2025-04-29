# 整数 n が与えられるので、n 未満に含まれる素数の個数を返す、primesUpToNCount という関数を定義する問題

## 関数の入出力例
入力のデータ型： `integer n`<br>
出力のデータ型： `integer`<br>

## テストケース
`primesUpToNCount(2) --> 0`<br>
`primesUpToNCount(3) --> 1`<br>
`primesUpToNCount(5) --> 2`<br>
`primesUpToNCount(13) --> 5`<br>
`primesUpToNCount(18) --> 7`<br>
`primesUpToNCount(89) --> 23`<br>
`primesUpToNCount(97) --> 24`<br>
`primesUpToNCount(100) --> 25`<br>
`primesUpToNCount(367) --> 72`<br>
`primesUpToNCount(673) --> 121`<br>
`primesUpToNCount(1000) --> 168`<br>
`primesUpToNCount(3406) --> 478`<br>
`primesUpToNCount(20034) --> 2266`<br>

## 思考プロセス
・ループ処理を2回行なう方法だと計算量が n が大きくなるほど増えてしまうため、エラトステネスの篩を使うことが好ましそう<br>
→ エラトステネスの篩で実装する

## 考えられるエッジケース
・整数と指定があるため特になし。<br>

## 悩んだ箇所
・特になかった。<br>

## 計算量
PHP<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：array_fillメソッドとループによる線形探索が1回あるが、定数は無視されるため<br>
・空間計算量：cache配列作成時に、n回分配列に要素を追加するため<br>
(結果)時間計算量：O(n log log n)　空間計算量：O(n)<br>
厳密にはこのようになるが、予想の計算量でも問題はないもよう。<br>


## 気づき
・array_fill()を使えると公式ドキュメントから予想して使ってみたところ、うまくいった。<br>

## 改善点
・2の倍数を最初から除外する<br>
