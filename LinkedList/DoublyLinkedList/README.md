# 先頭と末尾を定義することによって、DoublyLinkedList クラスを作成する問題


## Item クラス
`int data: 要素の値`  
`Item prev: 1 つ前のノード`  
`Item next: 1 つ先のノード`  
prev, next はデフォルトでは null を設定  


## プロパティ
`Item head: 先頭の Item`  
`Item tail: 末尾の Item`  
※固定配列を受け取り、コンストラクタ関数内で それぞれの Item の前後を繋げること  


## テストケース
`DoublyLinkedList numList = new DoublyLinkedList([1,2,3,4,5,6,7])`  
`numList.head.data --> 1`  
`numList.head.next.data --> 2`  
`numList.head.next.prev.data --> 1`  
`numList.tail.data --> 7`  
`numList.tail.prev.data --> 6`  
`numList.tail.prev.prev.data --> 5`  


## 考えられるエッジケース
・コンストラクタに渡す配列が空<br>


## 思考プロセス
【ゴール】  
DoublyLinkedListを正しく設計し、テストケースを出力すること  

【必要な要素】 
① Item クラスの定義  
・データを保持する変数  
・前のノードを指し示すポインタを格納する変数  
・次のノードを指し示すポインタを格納する変数  

② DoublyLinkedList関数の定義  
・引数を配列としたコンストラクタを用意する  
・双方向リストの先頭を head 変数で、末尾を tail 変数で管理する

③データの表示


## 悩んだ箇所
特になかった


## 直面したエラーと解決策
**エラー①**
エラーはなかった


## 気づき
・コミットするタイミングを本番を想定してこまめにするようにしたこと  
(これまで)問題が完了し、リモートにプッシュできる状態になってからコミットしていた  
(これから)1つの目的が達成できた段階でコミットする  
(理由)コミットはその瞬間のスナップショット。こまめに変更を加えた方が、後から前のコミット（履歴）に遡りやすいとわかったため  
→ チームメンバーと共有することを考えると、どのタイミングでエラーが発生したのかを明確にしやすくするためにも、今後コミットのタイミングを改善していく  

## 改善点・フィードバック
① DoublyLinkedListクラスのコンストラクタ内の if 文の可読性
```php
    // 改善前
    $this->head = new Item(0);
    $this->tail = $this->head;

    // 改善後
    $this->head = null;
    $this->tail = null;
```

② DoublyLinkedListクラスのコンストラクタ内のループ処理時における変数の可読性  
```php
    // 改善前
    $currentNode->next = new Item($arr[$i]);
    $currentNode->next->prev = $currentNode;
    $currentNode = $currentNode->next;
        
    // 改善後
    $newNode = new Item($arr[$i]);
    $currentNode->next = $newNode;
    $newNode->prev = $currentNode;
    $currentNode = $newNode;
```