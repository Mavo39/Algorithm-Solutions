# 連結リストの先頭 head が与えられるので、リストの中の最小値のインデックスを返す、findMinNum という関数を作成する問題
ただし、最小値が複数ある場合、最後の最小値のインデックスを返すこと  

## 【Node クラス】
#### プロパティ
`int data: 要素の値`   
`Node next: 1つ先のノード`  
next はデフォルトでは null を設定  

## 【SinglyLinkedList クラス】
#### プロパティ
`Node head: 先頭のノード`  
※固定配列を受け取り、コンストラクタ関数内で それぞれの Node の前後をつなげること  

## 【関数の入出力例】
`入力のデータ型： Node<integer> head`  
`出力のデータ型： integer`  


## 【テストケース】
1. `findMinNum(singlyLinkedList([1,2,3,4,-1,2])) --> 4`  
2. `findMinNum(singlyLinkedList([1,1,1])) --> 2`  
3. `findMinNum(singlyLinkedList([3,3,2,10,34,45,67,356])) --> 2`  
4. `findMinNum(singlyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5])) --> 9`  
5. `findMinNum(singlyLinkedList([71,8,16,33])) --> 1`  
6. `findMinNum(singlyLinkedList([101,54,82002,93,1207,131,1800,99])) --> 1`  
7. `findMinNum(singlyLinkedList([580,781])) --> 0`  
8. `findMinNum(singlyLinkedList([2,4,52,108])) --> 0`  
9. `findMinNum(singlyLinkedList([61,73,27,3001])) --> 2`  
  

## 【考えられるエッジケース】
- head が null のケース  


## 【思考プロセス】
#### ◾️ゴール  
連結リストの中の最小値のインデックスを、テストケースごとに正しく出力すること  

#### ◾️仮説（必要な要素）  
ゴールを達成するために必要な要素を整理  
  
1. Node クラスの定義  
- データを保持する変数  
- 次のノードを指し示すポインタを格納する変数  
  
2. SinglyLinkedList クラスの定義  
- 配列を引数としたコンストラクタを用意する  
- 先頭ノードを head 変数で管理する  
  
※ ①・②については、事前に[Common](../Common/php)に定義し、再活用しております  
  
3. 連結リストの中で最小のインデックスを返す関数を実装  
- ノードを表すインデックスと最小値を表すインデックス、最小値を変数で管理する  
- ループ処理でノードを進めるたびに、インデックスを更新していく  
- 現在管理している最小値より小さければ、最小値を更新する  
  
#### ◾️検証  
- 仮説通りの実装により、期待した出力結果を得ることができた  

## 【悩んだ箇所】
- 変数を定義する順番    

## 【直面したエラーと解決策】
- エラーはなかった  

## 【気づき】
- 実際に何が読みやすいかはレビューをもらってみないとわからないこと  
- これが読む方にとってわかりやすいんじゃないかと思って書いても、AIレビューで具体性や変数の命名が改善できたとわかることが多い  

## 【フィードバック・改善点】
- $i という命名を $index にした方が読みやすいという提案  
