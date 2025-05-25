# 整数で構成される配列 arr が与えられるので、片方向リスト化する getLinkedList という関数を作成する問題

## SinglyLinkedListNode クラス
**プロパティ**<br>
・int data: 要素の値<br>
・SinglyLinkedListNode next: 1 つ先のノード。デフォルトでは null に設定すること。<br>


## 関数の入出力例
入力のデータ型： `integer[] arr`<br>
出力のデータ型： `SinglyLinkedListNode <integer>`<br>


## テストケース
下記のテストケースの順番で文字を表示すること<br>
`getLinkedList([3,2,1,5,6,4]) --> 3➡2➡1➡5➡6➡4➡END`<br>
`getLinkedList([7,8,2,3,1,7,8,11,4,3,2]) --> 7➡8➡2➡3➡1➡7➡8➡11➡4➡3➡2➡END`<br>
`getLinkedList([34,35,64,34,10,2,14,5,353,23,35,63,23]) --> 34➡35➡64➡34➡10➡2➡14➡5➡353➡23➡35➡63➡23➡END`<br>
`getLinkedList([1]) --> 1➡END`<br>


## 考えられるエッジケース
・引数が空配列<br>


## 思考プロセス
ゴール: 引数の配列を片方向リスト化すること<br>
必要な要素: 
①SinglyLinkedListNodeクラスの定義<br>
用意するもの<br>
→ データを保持する変数<br>
→ 次のデータを指し示すポインタ<br>

②getLinkedList関数の定義<br>
(必要な要素)
・配列を順番に処理する<br>
・SinglyLinkedListNodeクラスのオブジェクトをつなぐ<br>
→ リンクリストの先頭を管理する<br>
→ 先頭を管理し、nextポインタを更新する<br>
→ ループ処理によって、オブジェクトの参照をつないでいく<br>

③データの表示<br>
・ループ処理にノードの先頭を指定し、nextでたどりながらデータを表示する<br>


## 悩んだ箇所
・与えられたクラスと関数と違うが、Nodeクラスの中でNodeの状態を定義し、LinkedListクラスで先頭を定義する形式にしなくていいのかと思ったこと<br>
→ この問題の意図は「すでに存在する配列」から片方向リストを作る ということなので、配列を使って先頭から順番に処理すれば十分要件を満たすことができる<br>
→ データ自体が配列で整理されている = 配列を先頭から処理すればいい<br>
→ 配列で順序が整理されており、必要なもの（戻り値）は先頭ノードのみなので、管理クラスを作る必要がない<br>


## 直面したエラーと解決策
**エラー①**
```sh
mv: rename SinglyLinkedListNode.js to SinglyLinkedListNodeClass.js: No such file or directory
```
(意味)<br>
指定したファイルやディレクトリが存在しない<br>

(原因)<br>
ディレクトリ相違<br>

(解決策)<br>
ファイルを管理しているディレクトリでコマンド実行<br>

**エラー②**<br>
```sh
Error [ERR_MODULE_NOT_FOUND]: Cannot find module '~LinkedList/getLinkedList/js/getLinkedList' imported from ~/LinkedList/getLinkedList/js/test.js
Did you mean to import "./getLinkedList.js"?
```
(意味)<br>
モジュールが見つからない<br>
`./getLinkedList.js`のことを意味しているのか？<br>

(原因)<br>
`.js`という拡張子が抜けていること<br>

(解決策)<br>
拡張子をつけること<br>

**エラー③**
状態が更新されていない、先頭ノードのデータのみ表示される<br>

(原因)<br>
現在のノード自体を更新していないこと<br>

(解決策)<br>
現在のノードを更新する<br>

```js
// 更新前
currNode.next = new SinglyLinkedListNode(arr[i]);

// 更新後
currNode.next = new SinglyLinkedListNode(arr[i]);
currNode = currNode.next;
```

## 気づき
・クラスやファイルを新しいエクスポートとインポートの方法で記述したことで流れを理解できた<br>
→ これまでは基本1ファイルに関数を記述していたため、そのファイルを別ファイルで読み込めばよかったが、ファイルが複数になった場合には対応が変わる<br>
→ `export` や `import` を使ってパーツとして使用する<br>


## 改善点・フィードバック
・関数の役割の分離<br>
```js
    // 改善前:「数字の表示」と「イテレーションの更新」を同時に行なっていた
    for(let i = 1; i <= arr.length; i++){
        console.log(currNode.data);
        currNode.next = new SinglyLinkedListNode(arr[i]);
        currNode = currNode.next;
    }

    // 改善後: 「イテレーションの更新」に専念し、ノードデータを表示する関数を別に設ける
    for(let i = 1; i <= arr.length; i++){
        currNode.next = new SinglyLinkedListNode(arr[i]);
        currNode = currNode.next;
    }
    .. 
    function printNodeDate(){

    }
```