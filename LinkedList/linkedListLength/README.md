# 片方向リストの先頭ノード head が与えられるので、片方向リストの長さを返す linkedListLength という関数を作成を作成する問題


## Node クラス
#### プロパティ
`int data: 要素の値`   
`Item next: 1 つ先のノード`  
next はデフォルトでは null を設定  

## SinglyLinkedList クラス
#### プロパティ
`Node head: 先頭の Item`  
※固定配列を受け取り、コンストラクタ関数内で それぞれの Item の前後を繋げること  

## 関数の入出力例
`入力のデータ型： SinglyLinkedList<integer> head`  
`出力のデータ型： integer`  


## テストケース
1. `linkedListLength(singlyLinkedList([3,2,1,5,6,4])) --> 6`
2. `linkedListLength(singlyLinkedList([7,8,2,3,1,7,8,11,4,3,2])) --> 11`
3. `linkedListLength(singlyLinkedList([34,35,64,34,10,2,14,5,353,23,35,63,23])) --> 13`
4. `linkedListLength(singlyLinkedList([1])) --> 1`  


## 考えられるエッジケース
・head が nullのケース<br>


## 思考プロセス
#### ゴール
テストケースごとに片方向リストの長さを正しく出力すること  

#### 仮説（必要な要素）
① Node クラスの定義  
- データを保持する変数  
- 次のノードを指し示すポインタを格納する変数    
  
② SinglyLinkedList クラスの定義  
- 配列を引数としたコンストラクタを用意する  
- 先頭ノードを head 変数で管理する  
  
※ ①・②については、事前に[Common](../Common/js)に定義し、再活用しております  
  
③ 片方向リストの長さを求める関数を実装
- 片方向リストのノード数をカウントする変数を用意する  
- 先頭ノードから末尾ノードまで進めつつ、ノード数をカウントする  
- カウントした変数を返す  

#### 検証


## 悩んだ箇所
特になかった


## 直面したエラーと解決策


## 気づき


## 改善点・フィードバック

