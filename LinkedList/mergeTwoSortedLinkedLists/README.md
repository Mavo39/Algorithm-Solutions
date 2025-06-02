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
・<br>

## 悩んだ箇所
・真ん中のノードの特定方法<br>
→ 自分で立てた仮説に従い、ループ処理を2回行なうことで真ん中の位置を特定した<br>


## 直面したエラーと解決策
**エラー①**
<br>


## 気づき・学び
・<br>


## 改善点・フィードバック
<br>
