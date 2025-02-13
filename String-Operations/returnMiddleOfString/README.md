# 文字列 string を受け取り、文字数の半分を文字列の真ん中から返す、middleSubstring という関数を定義する問題。
入力された文字列の長さが偶数の場合、文字列の真ん中から文字数の半分に相当する部分文字列を返す。<br>
入力された文字列の長さが奇数の場合：真ん中の文字を除いた、文字数の半分に相当する部分文字列を返す。<br>
入力文字列の文字数が 2 以下の場合、最初の文字を返す。<br>
（例）<br>
入力が "ABCDEFGH" の場合：真ん中の部分文字列は "CDEF" <br>
入力が "ABCDEFG" の場合：真ん中の部分文字列は "CDE"<br>
入力が "A" や "AB" の場合："A"<br>

## 関数の入出力例  
- **入力のデータ型**：`string` (`stringInput`)  
- **出力のデータ型**：`string`  

## テストケース  
`middleSubstring("A") --> A`<br>
`middleSubstring("AB") --> A`<br>
`middleSubstring("ABC") --> B`<br>
`middleSubstring("ABCD") --> BC`<br>
`middleSubstring("ABCDE") --> BC`<br>
`middleSubstring("ABCDEF") --> CDE`<br>
`middleSubstring("ABCDEFG") --> CDE`<br>
`middleSubstring("ABCDEFGH") --> CDEF`<br>
`middleSubstring("ABCDEFGHI") --> CDEF`<br>
`middleSubstring("ABCDEFGHIJ") --> DEFGH`<br>
`middleSubstring("ABCDEFGHIJK") --> DEFGH`<br>
`middleSubstring("ABCDEFGHIJKL") --> DEFGHI`<br>
`middleSubstring("fundamental") --> damen`<br>

## 解き方
求めた長さやサイズを使って部分文字列を連結して切り取る<br>
・文字列の長さを求める<br>
・切り取られるサイズを求める<br>
・切り取りを始める前方の位置を求める<br>
・文字列の長さが2以下のときの対応<br>
・前方から前方+真ん中分だけ切り取り<br>

## 気づき
・切り取る文字数の半分を開始位置のインデックスにすることで、文字列の中央部分をバランスよく切り取ることができるということ。<br>
・ceil()で小数点以下を切り上げるのは、切り取る文字数が奇数の場合に、開始位置が文字列の先頭に寄らないようにするためであるということ。<br>

## 試したこと
・floorとceilの使い分け<br>
