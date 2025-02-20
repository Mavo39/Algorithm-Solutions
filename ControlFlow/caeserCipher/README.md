# 小文字によって構成された文字列 message、自然数 n が与えられるので、n 分の文字移動させる暗号を作成する caesarCipher という関数を作成する問題。
条件<br>
①z の次は a に戻る。<br>
②返される文字列の空白は全て取り除くこと。<br>

## 関数の入出力例  
- **入力のデータ型**：`string message``integer n`  
- **出力のデータ型**：`string`  

## テストケース
`caesarCipher("i love you",0)`<br>
--> iloveyou<br>
`caesarCipher("i love you",1)`<br> 
--> jmpwfzpv`<br>
`caesarCipher("i love you",2)` <br>
--> knqxgaqw<br>
`caesarCipher("the future belongs to those who believe in the beauty of their dreams",2)` <br>
--> vjghwvwtgdgnqpiuvqvjqugyjqdgnkgxgkpvjgdgcwvaqhvjgktftgcou<br>
`caesarCipher("it is during our darkest moments that we must focus to see the light",5)`<br>
--> nynxizwnsltzwifwpjxyrtrjsyxymfybjrzxykthzxytxjjymjqnlmy<br>
`caesarCipher("do not go where the path may lead go instead where there is no path and leave a trail",10)`<br>
--> nyxydqygrobodrozkdrwkivoknqysxcdokngrobodroboscxyzkdrkxnvokfokdbksv<br>

## 解き方
移動した文字を求める関数と結果を連結する関数を別々に考える。<br>
・文字をASCIIコードに変換し、移動後の文字を求める。<br>
・移動後の文字を結果にループで連結していく。<br>

## 気づき
・文字をASCIIコードに変換するだろうと想定できた。<br>
・zに到達した後`a`に戻る方法を自力では思いつけなかった。<br>

## 試したこと
・正規表現で文字列を操作したこと<br>
・ASCIIコードに変換する方法を公式ドキュメントから探したこと<br>