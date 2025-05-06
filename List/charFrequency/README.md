# 小文字によって構成される文字列 message が与えられるので、各文字の出現頻度を 1 次元配列で返す charFrequency という関数を定義する問題
配列はアルファベット順にすること

## 例
レベルの一覧が [12,10,9,8,6,3,8,9,9,10] の場合、最も多く出現したレベルは 9 なので、[9] を返す<br>

## 関数の入出力例
入力のデータ型： `string message`<br>
出力のデータ型： `string[]`<br>

## テストケース
`charFrequency("sssss") --> [s : 5]`<br>
`charFrequency("i love you") --> [e : 1,i : 1,l : 1,o : 2,u : 1,v : 1,y : 1]`<br>
`charFrequency("the future belongs to those who believe in the beauty of their dreams") --> [a : 2,b : 3,d : 1,e : 11,f : 2,g : 1,h : 5,i : 3,l : 2,m : 1,n : 2,o : 5,r : 3,s : 3,t : 7,u : 3,v : 1,w : 1,y : 1]`<br>
`charFrequency("it is during our darkest moments that we must focus to see the light") --> [a : 2,c : 1,d : 2,e : 6,f : 1,g : 2,h : 3,i : 4,k : 1,l : 1,m : 3,n : 2,o : 4,r : 3,s : 6,t : 9,u : 4,w : 1]`<br>
`charFrequency("do not go where the path may lead go instead where there is no path and leave a trail") --> [a : 9,d : 4,e : 11,g : 2,h : 6,i : 3,l : 3,m : 1,n : 4,o : 5,p : 2,r : 4,s : 2,t : 7,v : 1,w : 2,y : 1]`<br>

## 思考プロセス
・ハッシュマップの作成<br>
→ 文字列を配列に格納<br>
→ 最後にアルファベット順にソート<br>


## 考えられるエッジケース
・文字列の長さが0<br>

## 悩んだ箇所
・特になかった<br>

## 計算量
JS<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：ループ処理が全部で2回行われるが定数は無視されるため<br>
・空間計算量：配列に対して要素分の追加があるため<br>
(結果)時間計算量：O(n)　空間計算量：O(n)<br>
・res.sort()でO(k log k)の計算量があることも考慮すること

## 直面したエラーと解決策
・なかった<br>

## 気づき
・他の方のコードから、正規表現を使って文字列を整える方法もあったと気づいた<br>

## 改善点
・正規表現を用いること<br>
→ 現在のコードだとスペースの削除が一度しか行われない<br>