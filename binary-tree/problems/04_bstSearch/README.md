# 問題
**二分探索木（BST）の根ノード root と整数 key が与えられるので、key と等しい部分木の根ノードを返す、bstSearch という関数を作成する問題**
そのようなノードが存在しない場合は、null を返すこと

## 問題概要 
**目的**  
BSTの特性を利用して、効率的に key を探索すること

## 入出力仕様
**入力**: `binaryTree<integer> root, integer key`  
**出力**: `binaryTree<integer>`  

## 要件と制約
### 要件
1. 二分探索木（BST）の探索
2. BSTの性質を利用する
3. 再帰または反復的なアプローチ

### 制約
1. 入力のBSTが正しい形式であること
2. ノードの値の範囲
3. 返り値の形式
- ノードが見つかった場合、そのノードを部分木のルートとして返すため、配列形式で子ノードも含めて返されます（例: [3,2,4]）
- ノードが見つからない場合は、null または空配列 [] を返します（言語や実装によります）

## テストケース
`bstSearch(toBinaryTree([0,-10,5,null,-3,null,9]), 5)--> [5,null,9]`  
`bstSearch(toBinaryTree([0,-10,5,null,-3,null,9]), 20)--> []`  
`bstSearch(toBinaryTree([5,3,6,2,4,null,7]), 3)--> [3,2,4]`  
`bstSearch(toBinaryTree([5,3,6,2,4,null,7]), 5)--> [5,3,6,2,4,null,7]`   
`bstSearch(toBinaryTree([5,3,6,2,4,null,7]), 15)--> []`  

## アプローチ
bstSearch関数の実装
- rootからキーが見つかるまで処理
- 再帰処理により実装
- keyと等しい値のノードがあったとき: その時点での部分木を返す
- keyより値が小さいとき: 左の子ノードに移動
- keyより値が大きいとき: 右の子ノードに移動

## 実装方針
- 再帰を使って実装する

## 想定されるエラー・境界条件（Edge Cases）
- root ノードが `null` のとき
- 対象が存在しないとき
※ いずれの場合も`null`を返すようにする

## 悩んだ箇所
- テスト実行時の戻り値が以下のようになること（出力結果がオブジェクト）
```js
BinaryTree {
  data: 5,
  left: null,
  right: BinaryTree { data: 9, left: null, right: null }
}
```

## 直面したエラーと解決策
（内容）テスト実行時の戻り値が以下のようになること（出力結果がオブジェクト）
```js
BinaryTree {
  data: 5,
  left: null,
  right: BinaryTree { data: 9, left: null, right: null }
}
```
(原因)戻り値がオブジェクトであるため  
(解決策)配列で返すための関数を別に用意する  
→ `binarySubtreeToArray`を共通関数として実装することで対応した  

## 気づき
- 実装前の目的と方向性を確かめてから実装することを習慣にできるようにしていこうと思った
- なぜこの処理や記述が必要かを説明できるようにすること
- 変数名への配慮が足りていないとフィードバックでわかった

## フィードバック・改善点
- `iterator`ではなく`currentNode`とすることで可読性を改善できる
```js
// 改善前
let iterator = root;
... 以下同じ

// 改善後
let currentNode = root;

```