# 連結リストの先頭 head と整数 data が与えられるので、リストの先頭と末尾にデータを挿入した新しい連結リストを返す、insertHeadTail というメソッドを作成する問題


**Nodeクラス**<br>
プロパティ<br>
・`int data`: ノードのデータ<br>
・`Node next`: 次のノードの参照<br>

**SinglyLinkedListクラス**<br>
プロパティ<br>
・`Node head`: 先頭ノード<br>

## テストケース
1. `arr = [3,3,2,10,34,45,67,356], SinglyLinkedList.insertHeadTail(367) --> 367➡3➡3➡2➡10➡34➡45➡67➡356➡367`<br>
2. `arr = [3,3,2,10,34,45,67,356], SinglyLinkedList.insertHeadTail(4) --> 4➡3➡3➡2➡10➡34➡45➡67➡356➡4`<br>
3. `arr = [3,32,2,10,34,45,67,356], SinglyLinkedList.insertHeadTail(46) --> 46➡3➡32➡2➡10➡34➡45➡67➡356➡46`<br>
4. `arr = [20,-5,34,45,67,356,34,687,31,-34,5], SinglyLinkedList.insertHeadTail(75) --> 75➡20➡-5➡34➡45➡67➡356➡34➡687➡31➡-34➡5➡75`<br>
5. `arr = [20,-5,34,45,67,356,34,687,31,-34,5], SinglyLinkedList.insertHeadTail(96) --> 96➡20➡-5➡34➡45➡67➡356➡34➡687➡31➡-34➡5➡96`<br>


## 思考プロセス
**ゴール**
リストの先頭と末尾にデータを挿入した連結リストを返すこと<br>

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

③insertHeadTailメソッドの定義<br>
メソッドの目的：先頭・末尾ノードにノードを挿入すること<br>
「先頭ノードに新しいノードを設定する」<br>
→ 指定したデータを元に新しいノードを生成し、そのnextプロパティに現在の先頭ノードのポインタをセットする<br>
「ノードを末尾まで進める」<br>
→ 新たな先頭ノードから末尾ノードまでループ処理で進める<br>
「末尾ノードに新たなノードを加える」<br>
→ nextプロパティに代入する<br>
「先頭ノードと末尾ノードを生成する」<br>
→ 先頭と末尾にデータは同じノードをセットするが、nextプロパティは異なるため、別ノードを生成する必要がある<br>
→ 先頭と末尾を分けて生成する<br>

**検証**<br>
・方向性が合っていた<br>

## 悩んだ箇所
・特になかった<br>


## 直面したエラーと解決策
エラーには遭遇しなかった


## 気づき・学び
・前回までの総括のような問題であった<br>
・以前に解いた際に、先頭と末尾でノードを分けた方が可読性が高いと思い、今回分けてノードを管理した<br>


## 改善点・フィードバック

