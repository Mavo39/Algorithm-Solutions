# ソート済みの連結リストの先頭 head1 と head2 が与えられるので、それを合体させ、新しい連結リストを返す、mergeTwoSortedLinkedLists というメソッドを作成する問題


## 使用するクラス
**Nodeクラス**<br>
プロパティ<br>
・`int data`: ノードのデータ<br>
・`Node next`: 次のノードの参照<br>

**SinglyLinkedListクラス**<br>
プロパティ<br>
・`Node head`: 先頭ノード<br>

**MergeTwoSortedLinkedListsクラス**
SinglyLinkedListクラスを継承し、mergeTwoSortedLinkedListsメソッドを実装<br>
→ 結果、SinglyLinkedListクラスを継承を承継せず。<br>
なお、問題にSinglyLinkedListクラスから継承することは明記されておらず。<br>


## テストケース
1. `mergeTwoSortedLinkedLists(singlyLinkedList([1,2,3]),singlyLinkedList([1,4,5])) --> 1➡1➡2➡3➡4➡5`<br>
2. `mergeTwoSortedLinkedLists(singlyLinkedList([1,2,3,10,30,45]),singlyLinkedList([1,4,30,50,80])) --> 1➡1➡2➡3➡4➡10➡30➡30➡45➡50➡80`<br>
3. `mergeTwoSortedLinkedLists(singlyLinkedList([2,3,5]),singlyLinkedList([5,8,12])) --> 2➡3➡5➡5➡8➡12`<br>
4. `mergeTwoSortedLinkedLists(singlyLinkedList([1,1,2,3,3,5]),singlyLinkedList([2,2,3,3,5,5,10,10])) --> 1➡1➡2➡2➡2➡3➡3➡3➡3➡5➡5➡5➡10➡10`<br>


## 思考プロセス
**ゴール**
ソート済みの連結リストを合体して表示すること<br>

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

③mergeTwoSortedLinkedListメソッドの定義<br>
メソッドの目的：2つのソート済みリストを連結すること<br>
・2つのリストを先頭から比較する<br>
・比較して小さい方のノードを先頭に入れる<br>
・この比較をノードの next プロパティが null になるまで続ける<br>
・最後に残ったノードをポインタに格納する<br>

**検証**<br>
・方向性はあっていた<br>
・mergeTwoSortedLinkedListメソッドは独立したクラスにまとめた方が、責任が分離できた<br>
・また静的メソッドとしてまとめることで、テストケースでmergeTwoSortedLinkedListメソッドをもったMergeTwoSortedLinkedListクラスのコンストラクタを使用せず、辻褄を合わせることができた<br>

## 悩んだ箇所
・更新処理によって、今どのノードにいるのかを把握すること<br>
→ 2つの連結リストをそれぞれ次のノードに更新することと、それらをつなぐ連結リストを更新するという、計3つの更新操作を整理してどのノードがどの状態なのかを把握するのが大変だった<br>
→ 1のテストケースを例に、紙に書き出して整理しながらコーディングしていったことで解決<br>


## 直面したエラーと解決策
**エラー①**<br>
親クラスのメソッドをオーバーライドしようとした結果、親クラスのメソッドを呼べなくなった<br>
(解決策)別名のメソッドを定義する<br>

**エラー②**<br>
MergeTwoSortedLinkedListクラスのコンストラクタ（SinglyLinkedListクラスで定義したコンストラクタ）を呼び出してSinglyLinkedListクラスのインスタンスを2つ格納したところ、エラーが発生<br>
(状況) MergeTwoSortedLinkedListクラスはSinglyLinkedListクラスを継承し、独自のコンストラクタを設定していない<br>
(原因) MergeTwoSortedLinkedListクラスが呼び出す、SinglyLinkedListクラスのコンストラクタは引数が1つであるため<br>
(解決策) SinglyLinkedListクラスを承継せず、単体のクラスとして独立させ、require_onceでファイルを読み込む<br>

**エラー③**<br>
2つの連結リストをつなぐための連結リストを新たにnullを格納して生成する際にエラーが発生<br>
(原因) Nodeクラスは引数に数値を受け取ることを期待しているため、nullは渡せない<br>
(解決策) new Node(0)と、0を渡す<br>

## 気づき・学び
・PHPにはオーバーロードという概念が原則存在しないこと<br>
→ 親クラスのメソッドに引数を加えたところ、エラーになりわかった<br>
・継承の目的を見失っていたことが長引かせてしまった最大の原因だった<br>
→ 継承である必要があるのか検討する詰めが甘かった、また、そうしないといけないという思考から抜け出せていなかった<br>
・仮のノードを作るという発想に至ったのはナイスだった<br>
・具体例を紙に書き出して一つ一つ追っていくのは、頭の中で行なうよりも確実だと感じたこと<br>

## 改善点・フィードバック
・メソッドの命名が曖昧<br>
→ (前)print (後)printList
