# 片方向リストの先頭ノード head が与えられるので、末尾の値を返す linkedListLastValue という関数を作成する問題


## 【Node クラス】
#### プロパティ
`int data: 要素の値`   
`Item next: 1 つ先のノード`  
next はデフォルトでは null を設定  

## 【SinglyLinkedList クラス】
#### プロパティ
`Node head: 先頭の Item`  
※固定配列を受け取り、コンストラクタ関数内で それぞれの Item の前後を繋げること  

## 【関数の入出力例】
`入力のデータ型： SinglyLinkedList<integer> head`  
`出力のデータ型： integer`  


## 【テストケース】
1. `linkedListLastValue(singlyLinkedList([3,2,1,5,6,4])) --> 4`
2. `linkedListLastValue(singlyLinkedList([7,8,2,3,1,7,8,11,4,3,2])) --> 2`
3. `linkedListLastValue(singlyLinkedList([34,35,64,34,10,2,14,5,353,23,35,63,23])) --> 23`
4. `linkedListLastValue(singlyLinkedList([1])) --> 1`


## 【考えられるエッジケース】
- head が null のケース<br>


## 【思考プロセス】
#### ◾️ゴール 
テストケースごとに末尾の値を正しく出力すること  

#### ◾️仮説（必要な要素）
ゴールを達成するために必要な要素を整理  
  
1. Node クラスの定義  
- データを保持する変数  
- 次のノードを指し示すポインタを格納する変数    
  
2. SinglyLinkedList クラスの定義  
- 配列を引数としたコンストラクタを用意する  
- 先頭ノードを head 変数で管理する  
  
※ ①・②については、事前に[Common](../Common/php)に定義し、再活用しております  
  
3. 末尾ノードの値を求める関数を実装  
- 先頭ノードのポインタを変数にコピーする  
- 先頭ノードから末尾ノードまで、ループ処理によりノードを更新  
- 末尾ノードの値にアクセスする  
  
#### ◾️検証  
 


## 【悩んだ箇所】



## 【直面したエラーと解決策】



## 【気づき】



## 【フィードバック・改善点】

