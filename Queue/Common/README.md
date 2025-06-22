# 以下に従って、Queue クラスを作成する問題


## 【Node クラス】
#### プロパティ
`int data: 要素の値`   
`Node next: 1つ先のノード`  
next はデフォルトでは null を設定  

## 【Queue クラス】
#### プロパティ
`Node head: 先頭ノード, デフォルトでは null に設定`  
`Node tail: 末尾ノード, デフォルトでは null に設定`  

#### メソッド
`Integer peekFront(): キューの先頭の Node の値を返す`  
`Integer peekBack(): キューの末尾の Node の値を返す`  
`void enqueue(int data): キューの末尾に Node を挿入`  
`Integer dequeue(): キューの先頭の Node を取り除き、その値を返す`  


## 【テストケース】
`q = new Queue()`  
`q.enqueue(4)`  
`q.peekFront() --> 4`  
`q.peekBack() --> 4`  
`q.enqueue(50)`  
`q.peekFront() --> 4`  
`q.peekBack() --> 50`  
`q.enqueue(64)`  
`q.peekFront() --> 4`  
`q.peekBack() --> 64`  
`q.dequeue() --> 4`  
  

## 【思考プロセス】
#### ◾️ゴール  
Queueクラスを正しく実装すること  

#### ◾️仮説
【目的】Queueクラスを正しく実装すること  

【必要な要素】
  
1. Node クラスの定義  
- データを保持する変数  
- 次のノードを指し示すポインタを格納する変数  
  
2. Queue クラスの定義    
- 先頭ノードを head 変数で管理する  
- 末尾ノードを tail 変数で管理する
- 各メソッドを指定された要件に基づき実装する  　


#### ◾️検証  
  

## 【悩んだ箇所】
 

## 【直面したエラーと解決策】
  

## 【気づき】


## 【フィードバック・改善点】

