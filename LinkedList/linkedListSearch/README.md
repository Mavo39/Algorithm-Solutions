# 連結リストの先頭 head と整数 data が与えられるので、リスト内に存在する data のインデックスを返す、linkedListSearch という関数を作成する問題
ただし、data が存在しない場合は、-1 を返すこと  

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
`入力のデータ型： Node<integer> head, integer data`  
`出力のデータ型： integer`  


## 【テストケース】
1. `linkedListSearch(singlyLinkedList([1,3,4,5]),3) --> 1`  
2. `linkedListSearch(singlyLinkedList([1,1,1,1]),1) --> 0`  
3. `linkedListSearch(singlyLinkedList([1,6,3,63,68,9,5]),5) --> 6`  
4. `linkedListSearch(singlyLinkedList([3,3,2,10,34,45,67,356]),67) --> 6`  
5. `linkedListSearch(singlyLinkedList([20,-5,34,45,67,356,34,687,31,-34,5]),-5) --> 1`  
6. `linkedListSearch(singlyLinkedList([71,8,16,33]),71) --> 0`  
7. `linkedListSearch(singlyLinkedList([71,8,16,33]),686) --> -1`  
8. `linkedListSearch(singlyLinkedList([101,54,822,93,131,1800,99]),1800) --> 5`  
9. `linkedListSearch(singlyLinkedList([580,781]),781) --> 1`  
10. `linkedListSearch(singlyLinkedList([2,4,52,108]),52) --> 2`  
11. `linkedListSearch(singlyLinkedList([61,73,27,3001]),45) --> -1`  
  

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
  
※ ①・②については、事前に[Common](../Common/js)に定義し、再活用しております  
  
3. 連結リストの中で data と同じ値を持つインデックスを返す関数を実装  
- インデックスを変数で管理する  
- ノードを末尾までループ処理によって進める  
- ループ処理により、次のノードに進めるたびにインデックスを更新する  
  
#### ◾️検証  
- 仮説に基づく実装により、期待通りの出力を得ることができた  

## 【悩んだ箇所】
特になかった  

## 【直面したエラーと解決策】
エラーはなかった  

## 【気づき】
- 共通クラスを作成したことによる再利用によって時間が短縮できていることを実感している  
- テストケースを自動化する方法を調べて、もっと楽にできるか試してみようと思った  
- ノードがどのように更新されていくかが頭の中で整理できてきた  

## 【フィードバック・改善点】
- 全体的にまとまっており、可読性もいいというレビューをいただけた  
