# ある文字列が回文かどうかをチェックする `isPalindrome` 関数を作成する  
この関数では、**スペースは無視し、大文字と小文字は区別しない。**

## 関数の入出力例  
- **入力のデータ型**：`string` (`stringInput`)  
- **出力のデータ型**：`bool`  

## テストケース  
`isPalindrome("kayak") → true`  
`isPalindrome("recursion") → false`  
`isPalindrome("Top spot") → true`  
`isPalindrome("Was it a cat I saw") → true`  
`isPalindrome("ad") → false`  

## 解き方
インデックスを管理する変数を2つ使う<br>
・文字列の最初と最後を管理するインデックスを使用する<br>
・こうすることで、ループを最後まで行わず、文字列の長さの半分まで行なう。<br>

## 気づき
・スペースの削除に正規表現を使える。<br>
・leftとrightという変数でインデックスを管理するとわかりやすい。<br>

## 試したこと
・正規表現の使用。<br>
