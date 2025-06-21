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
  

## 【悩んだ箇所】
  

## 【直面したエラーと解決策】
   

## 【気づき】
  

## 【フィードバック・改善点】
  