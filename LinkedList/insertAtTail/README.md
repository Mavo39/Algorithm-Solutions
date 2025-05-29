# 連結リストの先頭 head と整数 data が与えられるので、連結リストの末尾にデータを挿入した新しい連結リストを返す、insertAtTail というメソッドを作成する問題
最終的に、連結リストの順に値を出力することとし、テストケースの`→`は気にしなくてよい<br>

**Nodeクラス**<br>
プロパティ<br>
・`int data`: ノードのデータ<br>
・`Node next`: 次のノードの参照<br>

**SinglyLinkedListクラス**<br>
プロパティ<br>
・`Node head`: 先頭ノード<br>

## テストケース
1. `arr = [3,3,2,10,34,45,67,356], SinglyLinkedList.insertAtTail(367) --> 3➡3➡2➡10➡34➡45➡67➡356➡367`<br>
2. `arr = [3,3,2,10,34,45,67,356], SinglyLinkedList.insertAtTail(4) --> 3➡3➡2➡10➡34➡45➡67➡356➡4`<br>
3. `arr = [3,8], SinglyLinkedList.insertAtTail(4) --> 3➡8➡4`<br>
4. `arr = [3,32,2,10,34,45,67,356], SinglyLinkedList.insertAtTail(46) --> 3➡32➡2➡10➡34➡45➡67➡356➡46`<br>
5. `arr = [20,-5,34,45,67,356,34,687,31,-34,5], SinglyLinkedList.insertAtTail(75) --> 20➡-5➡34➡45➡67➡356➡34➡687➡31➡-34➡5➡75`<br>
6. `arr = [20,-5,34,45,67,356,34,687,31,-34,5], SinglyLinkedList.insertAtTail(96) --> 20➡-5➡34➡45➡67➡356➡34➡687➡31➡-34➡5➡96`<br>


## 思考プロセス
**ゴール**
リストの末尾にデータを挿入した連結リストを返すこと<br>

**仮説**<br>
【必要な要素】<br>
①Nodeクラスの定義<br>
クラスの目的：Node単体の管理・操作<br>
用意するもの<br>
・データを保持する変数<br>
・次のデータを示すポインタを格納する変数<br>

②SinglyLinkedListクラスの定義<br>
クラスの目的：連結リストの管理・操作<br>
・先頭ノードを定義する<br>
・配列を順番に処理し、連結リスト化していく<br>
→ ループ処理によって配列の2番目の要素から、ノードのnextポインタを更新して連結していく<br>

③insertAtHeadメソッドの定義<br>
メソッドの目的：末尾ノードにノードを挿入すること<br>
「ノードを末尾まで進める」<br>
→ 先頭ノードから末尾ノードまでループ処理で進める<br>
「末尾ノードに新たなノードを加える」<br>
→ nextプロパティに代入する<br>

**検証**<br>
・仮説通り実装できた<br>
・head が null だった場合の対応が抜けていたため、次回からエッジケースを考慮してから進めるようにする<br>

## 悩んだ箇所
・特になかった<br>


## 直面したエラーと解決策
**エラー①**
```
str = '';
    ^
ReferenceError: str is not defined
```
(意味)strが定義されていない<br>
(原因)変数の宣言をしていなかったこと<br>

## 気づき・学び
・これまでの書き方だと何をどうするということが曖昧な部分があったため、より細分化して必要なこと（仮説）を書くことにした<br>
・インポートはファイルごとに必要であること。一度にまとめてインポートしようとしたが、ファイルごとにインポートが必要とわかった<br>
・自作で出力例と同じになるメソッドを実装したことで、nextプロパティが次のノードに進む感覚が今まで以上に持てたこと<br>


## 改善点・フィードバック
・insertAtTailメソッド/printListメソッドにおいて、head が null のケースに対応すること
```js
    // 改善前
    insertAtTail(data){
        let iterator = this.head;
        while(iterator.next !== null){
            iterator = iterator.next;
        }
        iterator.next = new Node(data);
    }

    // 改善後
    insertAtTail(data){
        // null 対応を追加
        if(this.head === null){
            this.head = new Node(data);
            return;
        }

        let iterator = this.head;
        ...
    }
```
