# number が与えられるので、素数かどうかをループを使って判定する isPrime という関数を作成する問題

## 関数の入出力例  
- **入力のデータ型**：`integer number`  
- **出力のデータ型**：`bool`  

## テストケース
`isPrime(1) --> false`<br>
`isPrime(2) --> true`<br>
`isPrime(3) --> true`<br>
`isPrime(4) --> false`<br>
`isPrime(25) --> false`<br>
`isPrime(29) --> true`<br>
`isPrime(36) --> false`<br>
`isPrime(45) --> false`<br>
`isPrime(85) --> false`<br>
`isPrime(455) --> false`<br>

## 解き方
・number を2以上の数字と割り算して、約数かどうかを判定する<br>
・素数は1と指定した数字以外に約数をもたないことから、約数がないことを証明する<br>
・素数である2からループを開始する<br>
・最後に指定された数字が1より大きいかどうかをチェックする<br>

## 試したこと
・数字 = 1 だった場合をあらかじめ記述するパターンとそうではないパターンを作成したこと。<br>