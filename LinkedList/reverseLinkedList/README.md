# 片方向リストの先頭ノード head が与えられるので、逆向きに変換した連結リストを返す reverseLinkedList という関数を作成する問題


## 使用する共通クラス
**Nodeクラス**  
プロパティ  
・`int data`: ノードのデータ  
・`Node next`: 次のノードの参照  

**SinglyLinkedListクラス**  
プロパティ  
・`Node head`: 先頭ノード  


## 関数の入出力例
入力のデータ型： `SinglyLinkedList<integer> head`  
出力のデータ型： `SinglyLinkedList<integer>`  


## テストケース
1. `reverseLinkedList(singlyLinkedList([3,2,1,5,6,4])) --> 4➡6➡5➡1➡2➡3`  
2. `reverseLinkedList(singlyLinkedList([3])) --> 3`  
3. `reverseLinkedList(singlyLinkedList([3,1])) --> 1➡3`  
4. `reverseLinkedList(singlyLinkedList([3,1,5])) --> 5➡1➡3`  


## エッジケース
・SinglyLinkedListクラスに渡す引数が空のケース／1つのケース  
※共通クラスで定義済  


## 思考プロセス  
**ゴール**  
連結リストを逆表示すること  

**仮説**  
【必要な要素】  
① Nodeクラスの定義  
クラスの目的：Node単体の管理・操作  
用意するもの  
・データを保持する変数  
・次のデータを示すポインタを格納する変数  

② SinglyLinkedListクラスの定義  
クラスの目的：連結リストの管理・操作  
・先頭ノードを定義する  
・配列を順番に処理し、連結リスト化していく  
→ ループ処理によって配列の2番目の要素から、ノードのnextポインタを更新して連結していく  

※①・②は共通 クラスとして実装済  

③ reverseLinkedList関数を定義  
メソッドの目的：連結リストを流れを逆にすること  
(前) A → B → C  
(後) C → B → A  
・headのコピーを作成する  
・前のノードを表す prev 変数を null で初期化する  
・next プロパティに格納されているノードのアドレスを新たな変数 nextNode に格納する  
・今現在のノードの next プロパティに prev 変数を格納する  
・prev 変数に現在のノードを格納する  
・現在のノードを nextNode に更新する  
・最後に先頭ノードを prev 変数に更新する  

**検証**  
・方向性があっていた  


## 悩んだ箇所


## 直面したエラーと解決策
**エラー①**  
```
let nextNode = current.next;
TypeError: Cannot read properties of undefined (reading 'next')
```
(意味) `next` が定義されていないため読み込めない  
(原因) テストケースで `list1.head` と、headプロパティにアクセスしていなかったこと　
(解決策) `list1.head`によって、ノードにアクセスできるようにする  


## 気づき・学び  
・Markdown形式は行末にスペース2個使うことで改行できること  
→ これまで、可読性の悪い文書をつくっていたので、今後はこの方法で対応していく  


## 改善点・フィードバック  
・ループ処理後の `head = prev;`は不要  
