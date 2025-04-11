# Sam は a 駅、b 駅、... y 駅、z 駅とアルファベットが各駅の名前になっている路線の電車に乗っています。Sam は自分が乗った駅から降りる駅まで、全ての停止場所を確認しました。乗車駅 firstAlphabet、降車駅 secondAlphabet が与えられるので、停止駅を配列として返す、generateAlphabet という関数を定義する問題

## 条件
・アルファベットは大文字と小文字を区別せず、全て小文字で表示し、a に近い文字から返すこと<br>

## 関数の入出力例
入力のデータ型： `char firstAlphabet`, `char secondAlphabet`<br>
出力のデータ型： `char[]`<br>

## テストケース
`generateAlphabet('a','z') --> [a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z]`<br>
`generateAlphabet('b','b') --> [b]`<br>
`generateAlphabet('C','Z') --> [c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z]`<br>
`generateAlphabet('M','z') --> [m,n,o,p,q,r,s,t,u,v,w,x,y,z]`<br>
`generateAlphabet('z','a') --> [a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z]`<br>

## 思考プロセス
・引数はすべて小文字に変換する必要がある<br>
→ 組み込み関数をつかって変換する<br>
・引数のどちらが先に来る文字かを判別するためにASCIIコードを使おう<br>
→ firstAlphabetとsecondAlphabetの文字コードを比較して小さい方と大きい方に分ける<br>
→ 小さい方から大きい方に向かってループ処理をすれば、間の文字を格納できる<br>
<br>

## 計算量
PHP<br>
(予想)時間計算量：O(n) 空間計算量：O(n)<br>
(判断根拠)<br>
・時間計算量：ループ処理を1回行なうため<br>
・空間計算量：新たに配列に要素を加えていくことで、要素数分の追加メモリの消費が必要になるため<br>
(実際)時間計算量: O(n)・空間計算量: O(n)<br>


## 気づき
・以前はASCIIコードに変換してから操作するという視点がなかったが、そん点を考えられるようになったこと<br>

## 改善点
<br>