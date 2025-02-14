# アルファベットで書かれた文字列 s が与えられるので、再帰を使って連続で続いた文字を数字に置き換える、stringCompression という関数を作成する問題

## 関数の入出力例  
- **入力のデータ型**：`string` (`s`)  
- **出力のデータ型**：`string`  

## テストケース  
`stringCompression("aaabbb")` <br>
--> a3b3<br>
`stringCompression("aaabbbc")`<br>
--> a3b3c<br>
`stringCompression("aaabbbCCL")` <br>
--> a3b3C2L<br>
`stringCompression("aaabbbCCLL")`<br>
--> a3b3C2L2<br>
`stringCompression("abceeaaaddbbb")` <br>
--> abce2a3d2b3<br>
`stringCompression("aaabbbaaaaccaaaaba")` <br>
--> a3b3a4c2a4ba<br>
`stringCompression("a")`<br>
--> a<br>

## 解き方
** Two pointer **<br>
2つのポインタ（インデックス）を利用して、データを走査する。具体的には、ポインタを動かしながら条件をチェックしていく。<br>
・始まりの文字(left)とそれに続く文字(right)をインデックスで管理するポインタを使って比較する<br>
・2つの文字が同じとき、固定していない方のポインタを移動する<br>
・ベースケース<br>
文字列の開始位置のポインタが文字列の長さに達したとき<br>
・再帰ケース<br>
①現在の文字が前の文字と同じ場合<br>
rightが文字列の長さ未満 かつ leftと同じとき：right + 1をして再帰処理<br>
②現在の文字が前の文字と異なる場合<br>
rightをleftに格納して再帰処理<br>

## ポイント
・文字が連続しているか判断する<br>
・連続が止まった時に、出力する文字に加えて連続した数値も加える<br>
・1つのポインタを固定し、もう1つのポインタを動かして条件をチェックする<br>

## 気づき
・ベースケースは管理しているインデックスが文字列の長さに達するまでと定めることはできた。<br>
・一度目は自力で解くのにかなり苦戦した。特に、ツーポインタを知るまではどう値を更新していくかの見当がつきにくかった。<br>

## 試したこと
・末尾呼び出し最適化による記述<br>
・補助関数を作成することで、メイン関数をシンプル化したこと。<br>
