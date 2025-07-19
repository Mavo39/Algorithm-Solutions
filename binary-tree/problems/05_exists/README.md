# 問題
**異なる整数値で構成される二分探索木（BST）の根ノード root と整数 key が与えられるので、key が BST の中に存在するかどうか判定する exists という関数を作成する問題**
key が BST の中に存在していれば true を、そうでなければ false を返すこと

## 問題概要 
**関数の目的**  
BSTの特性を利用して、効率的に key を探索すること

## 入出力仕様
**入力**: `binaryTree<integer> root, integer key`  
**出力**: `bool`  

## 要件と制約
### 要件
1. 二分探索木（BST）の探索
2. BSTの性質を利用する
3. 再帰または反復的なアプローチ

### 制約
1. 入力のBSTが正しい形式であること
2. ノードの値の範囲
3. 返り値の形式: bool値を返す

## テストケース
`exists(toBinaryTree([0,-10,5,null,-3,null,9]), 5)--> true`  
`exists(toBinaryTree([0,-10,5,null,-3,null,9]), 20)--> false`  
`exists(toBinaryTree([5,3,6,2,4,null,7]), 3)--> true`  
`exists(toBinaryTree([5,3,6,2,4,null,7]), 5)--> true`   
`exists(toBinaryTree([5,3,6,2,4,null,7]), 15)--> false`  

## アプローチ
exists関数の実装
- rootからキーが見つかるまで処理
- 再帰処理により実装
- keyと等しい値のノードがあったとき: `true`を返す
- keyより値が小さいとき: 左の子ノードに移動
- keyより値が大きいとき: 右の子ノードに移動
※基本的な方向性は`04_bstSearch`と同じ

## 実装方針
- 再帰を使って実装する

## 想定されるエラー・境界条件（Edge Cases）
- root ノードが `null` のとき
- 対象が存在しないとき
※ いずれの場合も`false`を返すようにする

## 悩んだ箇所
- 出力結果が改行されないこと

## 直面したエラーと解決策
- 出力結果が改行されない
```php
// 改善前
echo exists($root1, 5) === true ? "true" : "false" . PHP_EOL;

// 改善後
echo (exists($root1, 5) === true ? "true" : "false") . PHP_EOL;
```

## 気づき
- 改行できない原因に括弧で明示的に制御できていなかったこと

## フィードバック・改善点
