# 連結リストの先頭 head が与えられるので、それが回文になっているか判定する、palindromeLinkedList という関数を作成する問題
    

## 関数の入出力例
入力のデータ型： `SinglyLinkedList head`  
出力のデータ型： `bool`  


## テストケース
1. `palindromeLinkedList(singlyLinkedList([1,2,3])) --> false`  
2. `palindromeLinkedList(singlyLinkedList([1,2])) --> false`  
3. `palindromeLinkedList(singlyLinkedList([1,0,1])) --> true`  
4. `palindromeLinkedList(singlyLinkedList([3,4,4,3,6])) --> false`  
5. `palindromeLinkedList(singlyLinkedList([3,6,4,4,3,6])) --> false`  
6. `palindromeLinkedList(singlyLinkedList([3,6,4,4,6,3])) --> true`  
7. `palindromeLinkedList(singlyLinkedList([1,2,3,2,1])) --> true`  


## 【思考プロセス】
#### ◾️ゴール  
連結リストが回文になっているかどうかを判定できる関数を実装し、テストケースを正しく出力すること  

#### ◾️仮説   
【目的】  
連結リストが回文かどうかを判定すること  
  
【実装の方向性】  
- スタック配列を用意する    
- 連結リストの先頭からデータをスタックに格納していく  
- できたスタックの末尾から先頭に向かって、連結リストは先頭から末尾に向かってループ処理により走査し、それぞれのデータが等しいかどうかをチェックする  
- 操作の途中でデータが等しくないときは `false` を返し、全て走査できたときは `true` を返す  
  
【必要な要素】  
- Nodeクラス・SinglyLinkedListクラス  
※ [code](../../LinkedList/Common/php)から2つのクラスを再利用する  
- スタック：連結リストのデータを一時的に保持する  
- 現在の連結リストの値：head から next で操作していく  
- ループ処理： スタックに格納するとき、値を比較するときに使用する  
  

#### ◾️検証  
仮説に沿って実装し、期待通りの出力を得ることができた  
ただし、リファクタリングの余地あり  

## 【悩んだ箇所】
- ファイルパス  
他ディレクトリの共通クラスを使うことを思いついたものの、テストケースを格納したファイルのディレクトリでテストケースを実行すると、パスの不整合が発生した  
→ `__DIR__` を使って絶対パスに変更することで解決  


## 【直面したエラーと解決策】
**エラー①**  
`PHP Warning:  require_once(/Users/mavo/project/Algorithm-Solutions/Stack/palindromeLinkedList/php/../LinkedList/Common/PHP/Node.php): Failed to open stream: No such file or directory in /Users/mavo/project/Algorithm-Solutions/Stack/palindromeLinkedList/php/palindromeLinkedList.php on line 3`  
【原因】ファイルパスが正しくないこと  
【気づいたきっかけ】`No such file or directory`ということは、正しく参照されていない可能性がある  
【解決策】  
1. palindromeLinkedList.php で絶対パスを設定  
2. test.phpに`require_once __DIR__ . '/palindromeLinkedList.php';`を追加  
3. SinglyLinkedList.phpのパスを絶対パスに変更  
  
**エラー②**  
出力結果が以下のように空白と1になった  
```sh


1


1
1
```
【原因】PHPの仕様による  
【解決プロセス】  
- ChatGPTに `false` の場合の挙動を確認
- 公式ドキュメントで `echo` の説明で確認  
※ 参考URL: http://php.net/manual/ja/function.echo.php
【解決策】結果を文字列で出力する  
※ 本文では、テストケースが複数あるため、関数の処理結果を文字列で出力する関数を実装した  

## 【気づき】
- PHPにおいて、`false` は空、`true` は `1` を出力すること  
- ファイルパスを絶対パスにすることで、実行する場所に依存しなくて済むこと  
- 今回の実装ではスタックの特性を十分に活かしきれていないと他の方のコードを見てわかった(fast&slowにより連結リストの半分までスタック処理)  
- 関数を使用することによるオーバーヘッドが発生するという視点が抜けていたことに気づいた(array_pushを使用しない)  

## 【フィードバック・改善点】
- 連結リストが1つの場合の対応の追加  
- array_push()の代わりに`[] = ~`を使用して直接代入すること  
これにより関数を使用することによって発生するオーバーヘッドを避けることができる  
- fast & slow をつかった別の解き方
※ 次回、この解き方にチャレンジする  