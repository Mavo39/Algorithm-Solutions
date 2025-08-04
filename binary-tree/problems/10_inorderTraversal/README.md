# 問題

**整数で構成される二分木の根ノード root が与えられるので、間順を表す配列を返す、inorderTraversal という関数を作成する**  

## 関数の目的

与えられた二分木の根ノードから、間順で走査した結果を配列として返すこと

## この問題に取り組む目的

木構造の走査における「間順走査」を実装できるようにすること

## 入出力仕様

**入力**: `binaryTree<integer> root`  
**出力**: `integer[]`  

## テストケース
1. `inorderTraversal(toBinaryTree([0,-10,5,null,-3,null,9]))--> [-10,-3,0,5,9]`  
2. `inorderTraversal(toBinaryTree([5,3,6,2,4,null,7]))--> [2,3,4,5,6,7]`  
3. `inorderTraversal(toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]))--> [-18,-17,-11,-4,-2,3,8,19,25] `  
4. `inorderTraversal(toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]))--> [-10,-7,-4,-3,0,1,2,3,5,6,8,13,15,18,19]`   
5. `inorderTraversal(toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]))--> [-9,-6,-5,-4,0,1,10,14,15,16,17,19]`  
6. `inorderTraversal(toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]))--> [-10,-7,-4,-3,0,1,2,3,5,6,8,13,15,18,19]`

## 想定されるエラー・エッジケース

- root が `null`: 空配列を返す

## 前提知識

**間順走査**  
ノードの探索順  
1. 左の子ノード
2. 根ノード
3. 右の子ノード

## 仮説・検証

### 仮説

間順走査は「左→根→右」という処理を全ノードに適用する構造であるため、再帰が自然に対応できる

#### 実装方針

**構造**  
再帰関数を使って間順走査を実装する  

**状態（結果）を保持する場所**  
間順の走査結果を配列に格納する必要があるため、補助関数内で参照渡しされた配列を更新していく  

**関数の役割分担**  
メイン関数: 配列の初期化、結果配列を補助関数経由で返す
補助関数: 再帰処理による配列の更新を行ない、処理結果の配列を返す

#### この実装方針にした理由

- 処理内容である、配列の返却・配列の状態管理・再帰処理を一つの関数で行なうと見通しが悪くなってしまうため  

### 検証

- 仮説に基づいた実装により、期待通りの出力結果が得られた

## ふりかえり

- 配列を初期化して変数に格納し、その変数を補助関数に渡すような設計にせず、引数として渡す箇所で空配列を渡すことで初期化した

- 実装自体は前回取り組んだ`preorderTraversal`の処理順が変わったのみだったため、比較的スムーズに実装できた
再帰処理の処理の順番と戻りの処理について意識しながら取り組んだ

- レビュー結果を受けて、すでに null チェックしているため無駄な処理だということがわかった

## 直面したエラーと解決策

- `TypeError: Cannot read properties of undefined (reading 'push')`

```
arr.push(node.data);
            ^
TypeError: Cannot read properties of undefined (reading 'push')
    at inorderTraversalHelper (/Users/mavo/project/algorithm-solutions/binary-tree/problems/10_inorderTraversal/js/src/inorderTraversal.js:10:13)
    at inorderTraversalHelper (/Users/mavo/project/algorithm-solutions/binary-tree/problems/10_inorderTraversal/js/src/inorderTraversal.js:9:9)
    at inorderTraversal (/Users/mavo/project/algorithm-solutions/binary-tree/problems/10_inorderTraversal/js/src/inorderTraversal.js:2:12)
    at Object.<anonymous> (/Users/mavo/project/algorithm-solutions/binary-tree/problems/10_inorderTraversal/js/tests/inorderTraversalTest.js:6:13)
```

【内容】未定義のものに push しようとしてエラー  
【原因】補助関数`inorderTraversalHelper`に引数として配列を渡していなかったこと  
【解決策】引数として arr を補助関数に渡す


## フィードバック・改善点

- `if(node === null) return null;` が不適切
→ 処理を止めるだけでよい  
再起呼び出しの途中で null を返すと配列が壊れてしまう可能性がある

```js
// 改善前
if (node === null) return null;

// 改善後
if (node === null) return;
```

- ｀if (node !== null)` の条件が冗長
すでにその上で `node === null` をチェックしているため不要
