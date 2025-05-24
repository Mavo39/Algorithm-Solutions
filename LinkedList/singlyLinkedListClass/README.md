# SinglyLinkedList クラスから連結リストを作成し、while 文によって、各値を出力する問題

## Item クラス
**プロパティ**<br>
・int data: 要素の値<br>
・Item next: 1 つ先のノード。デフォルトでは null に設定すること。<br>

## SinglyLinkedList クラス
各ノードを繋げた状態で、先頭を定義することによって、SinglyLinkedList クラスを表現できる<br>
**プロパティ**<br>
・Item head: 先頭の Item<br>


## テストケース
`item1 = new Item(7)`<br>
`item2 = new Item(99)`<br>
`item3 = new Item(45)`<br>
`item1.next = item2`<br>
`item2.next = item3`<br>
`numList = new SinglyLinkedList(item1)`<br>


## 思考プロセス
ゴール: 各ノードの値を順番に表示すること<br>
必要な要素: 
①ノードクラスの定義<br>
・用意するもの<br>
→ データを保持する変数<br>
→ 次のデータを指し示すポインタ<br>

②リンクリストクラスの定義<br>
・ノードをつなぐためのクラス<br>
→ リンクリストの先頭を管理する<br>
→ 先頭を管理し、ポインタを更新することでリンクリスト構造を維持できる<br>

③テストケースの記述<br>
・ノードの生成<br>
・ノードの次のノードを設定<br>
・while ループによって出力<br>


## 悩んだ箇所
・ファイルのつながりをどう表現するか<br>
→ 当初テストケースファイルで2つのクラスを呼び出していたが、依存関係を明確化するには、呼び出したファイルでさらにそのファイルが使用するファイルを呼び出すという階層構造の方がいいと、フィードバックから学んだ<br>


## 直面したエラーと解決策
**エラー①**
```sh
PHP Fatal error:  Uncaught Error: Typed property Item::$next must not be accessed before initialization in ~LinkedList/singlyLinkedListClass/php/test.php:15
Stack trace:
#0 {main}
  thrown in ~LinkedList/singlyLinkedListClass/php/test.php on line 15
```

(意味)<br>
`$next` に値が代入される前にアクセスした<br>

(原因)<br>
nullによる初期化がされていないこと<br>

(解決策)<br>
nullで初期化し、データ型を null 許容にする<br>

**エラー②**<br>
最後のテストケースが出力されない<br>
(原因)<br>
ループ条件が正しくないこと<br>
・null チェックを next に対して行なっていた<br>

(解決策)<br>
ループ条件における null チェックを現在のItemノードの値を対象に行なうこと<br>


## 気づき
・リンクリスト構造は木構造の理解にもつながるため、改めて構造を理解することで勉強になった<br>
・ファイル間の依存関係を明確化するために、ファイルの呼び出しによる階層構造が有効だとわかった<br>

## 改善点・フィードバック
・ファイルの依存関係<br>
・デバッグ目的でない場合は var_dump() は避ける<br>
