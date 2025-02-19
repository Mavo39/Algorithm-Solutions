# 最大公約数を求める関数 gcd を再帰・ループを使ってそれぞれ求める問題

## 関数の入出力例  
- **入力のデータ型**：`integer n1 n2`  
- **出力のデータ型**：`integer`  

## テストケース
`gcd(44,242) --> 22`<br>
`gcdWhileLoopIteration(3355,2379) --> 61`<br>
`gcdWhileLoopIteration(107, 31) --> 1`<br>
`gcdWhileLoopIterationReturn(44,242) --> 22`<br>
`gcdWhileLoopIterationReturn(0, 55) --> 55`<br>
`gcdWhileLoopIterationFlag(44,242) --> 22`<br>
`gcdWhileLoopIterationFlag(48, 48) --> 48`<br>

## 解き方
①再帰<br>
②while ループ<br>
③while ループ return<br>
④while ループ flag<br>

## 気づき
・flag が true である間はループし、false になったタイミングで終了する方法があること。<br>

## 試したこと
・whileループの中で種類を分けて実装したこと。<br>
・whileループの中で flag に関する解き方は他の方の解き方を参考にしたこと。<br>
・複数の関数をまとめて export する方法を学び、その方法を実践したこと。<br>