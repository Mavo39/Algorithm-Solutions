# 自然数 n が素数かどうか判定する、recursiveIsPrime という関数を再帰計算を使って作成する問題

## 関数の入出力例  
- **入力のデータ型**：`string` (`n`)  
- **出力のデータ型**：`bool`  

## テストケース  
`recursiveIsPrime(1)``--> false`<br>
`recursiveIsPrime(2)``--> true`<br>
`recursiveIsPrime(3)``--> true`<br>
`recursiveIsPrime(4)``--> false`<br>
`recursiveIsPrime(25)``--> false`<br>
`recursiveIsPrime(29)``--> true`<br>
`recursiveIsPrime(36)``--> false`<br>
`recursiveIsPrime(45)``--> false`<br>
`recursiveIsPrime(85)``--> false`<br>
`recursiveIsPrime(455)``--> false`<br>

## 解き方
素数は2以上を確かめていく<br>
・n だけでは情報が足りないため、補助関数を使って引数に2以降の数字を追跡する変数を追加し、数字を順番に検証していく。<br>
・ベースケース：①i の2乗が n を超えたとき ②n が i で割り切れたとき<br>
・再帰ケース：i に1を加え、再帰処理<br>


## 気づき
・2未満は素数ではないということをしっかり条件に落とし込むことで判定する。<br>
・すべて処理せず、平方根までの処理にすることで計算量を減らすことができたこと。<br>
与えられた数字の平方根までしかチェックしないことによって、nを最後まで検証しなくて済むため、その分計算量を減らすことができる。<br>
仮にnまですべて検証するとO(n)の計算量だが、O(√n)の計算量で処理できる。<br>
これは平方根までチェックすると、それ以降は以前にやった処理と同じになるからである。<br>

## 試したこと
・補助関数を作成することで、メイン関数をシンプル化したこと<br>
・計算量を減らすための条件を設定したこと<br>
・PHPで型指定したこと<br>
