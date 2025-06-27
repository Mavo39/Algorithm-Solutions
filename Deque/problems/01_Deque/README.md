# 以下に従って、Deque クラスを作成する問題


## 【Node クラス】
#### プロパティ
`int data: 要素の値`   
`Node prev: 1つ前のノード`  
`Node next: 1つ先のノード`  
prev, next はデフォルトでは null を設定  

## 【Deque クラス】
#### プロパティ
`Node head: 先頭ノード`  
`Node tail: 末尾ノード`  
head, tail はデフォルトでは null を設定  

#### メソッド
`Integer peekFront(): キューの先頭の Node の値を返す`  
`Integer peekBack(): キューの末尾の Node の値を返す`  
`void enqueueFront(int data): 先頭に Node を追加`  
`void enqueueBack(int data): 末尾に Node を追加`  
`Integer dequeueFront(): 先頭から Node を削除し、その値を返す。両端キューに Node が存在しない場合、null を返すこと`  
`Integer dequeueBack(): 末尾から Node を削除し、その値を返す。両端キューに Node が存在しない場合、null を返すこと`  


## 【テストケース】
`q = new Deque()`  
`q.enqueueBack(4)`  
`q.enqueueBack(50)`  
`q.peekFront() --> 4`  
`q.peekBack() --> 50`  
`q.enqueueFront(36)`  
`q.enqueueFront(96)`  
`q.peekFront() --> 96`  
`q.peekBack() --> 50`  
`q.dequeueBack() --> 50`  
`q.dequeueBack() --> 4`  
`q.peekFront() --> 96`  
`q.peekBack() --> 36`  
`q.enqueueFront(20)`  
`q.dequeueBack() --> 36`  
  

## 【思考プロセス】
#### ◾️ゴール  
Deque クラスを実装し、テストケースを正しく出力すること  

#### ◾️仮説
【目的】Deque クラスを正しく実装すること  

【必要な要素】
  
1. Node クラスの定義  
- データを保持する変数  
- 前後のノードを指し示すポインタを格納する変数  
  
2. Deque クラスの定義    
- 先頭ノードを head 変数で管理する  
- 末尾ノードを tail 変数で管理する
- 各メソッドを指定された要件に基づき実装する  
- enqueue のメソッドについては、可読性を高めるために、新しいノードを格納する変数を使用する  


#### ◾️検証  
- 仮説に沿って実装し、期待通りの出力が得られた     

## 【悩んだ箇所】  
- 特になかった

## 【直面したエラーと解決策】
**エラー①**  
```sh: エラーメッセージ
~algorithm-solutions/Deque/src/js/Deque/Deque.js:40
            this.tail = new Item(data);
                            ^
ReferenceError: Item is not defined
```
【原因】クラス名相違  
【解決策】Item から Node に名前変更  

**エラー②**  
【内容】2つ目のテストケースが期待通りの出力とならなかった  
【原因】使うメソッドを間違っていた  
【解決策】peekFront → peekBack に変更（15行目）  

## 【気づき】
- 開発現場でよく使用されるディレクトリ構造をAIから学び、このクラスから `src/` と `tests/` に分けて実装することにしたことで、ディレクトリ構造の管理について学んだ
- 将来的にどうしたいかを先に考えて、ディレクトリに落とし込むため、思ったような構成にならなかったときは、やり直して、今回のディレクトリ構成にまとめた
- 機能別にディレクトリをまとめることを最初に考えたが、言語主軸の方が現場寄りと知り、そちらに合わせてみた
- テストケースをまとめたファイル名は、`test.js`ではなく、その前に対象となるクラスや関数を明示するのが一般的だと分かったので、その点を改善した
- 可読性を意識して、改行と波括弧を使っていくことにした

## 【フィードバック・改善点】
- head が null に該当したときに `temp` に格納したノードのデータが正常に取り出せない
```js
// 改善前: dequeueFront()
    if(this.head === null){
        this.tail = null;
        return null; // temp にデータを格納しているにもかかわらず取り出せない
    }

// 改善後
    if(this.head === null){
        this.tail = null;
    } else {
        this.head.prev = null;
    }
```
