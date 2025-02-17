# 自然数 digits（0 < digits < 10^15）が与えられるので、数字を 1 桁ずつ分解して、それぞれの値を合計し、その値が 1 桁になるまで同じ作業を繰り返した時、それぞれの合計値を足し合わせて得られる値を返す、recursiveDigitsAdded という関数を再帰を使って作成する問題。

## 例
45622943 の場合、1 桁ずつ分解することによって、<br>
4 + 5 + 6 + 2 + 2 + 9 + 4 + 3 = 35 となりますが、値が 1 桁ではないので、<br>
もう一度 35 = 3 + 5 = 8 のように分解する。<br>
最後にそれぞれ足し合わせて 8 + 35 = 43 となる。<br>

## 関数の入出力例  
- **入力のデータ型**：`long` (`digits`)<br>
- **出力のデータ型**：`integer`<br>

## テストケース  
`recursiveDigitsAdded(5) --> 5`<br>
`recursiveDigitsAdded(8) --> 8`<br>
`recursiveDigitsAdded(12) --> 3`<br>
`recursiveDigitsAdded(98) --> 25`<br>
`recursiveDigitsAdded(3528) --> 27`<br>
`recursiveDigitsAdded(99999999999884) --> 132`<br>
`recursiveDigitsAdded(5462) --> 25`<br>
`recursiveDigitsAdded(45622943) --> 43`<br>
`recursiveDigitsAdded(9514599) --> 48`<br>

## 解き方
①再帰<br>
・メイン関数で小計の合計を求め、補助関数で各桁の小計を求める。<br>
・一の位の数とそれ以外の数を'%', '/ 10'を使って表現する。<br>
②一部ループ<br>

## 気づき
・1の位の数を余りの考え方を使って表現し、それ以外の部分を10で割って表現するという発想に至ることができた。はじめ、各桁をどう表現するかで迷ったが、例を見て思いついた。<br>

## 試したこと
・関数を役割ごとに分割して表現したこと。<br>
