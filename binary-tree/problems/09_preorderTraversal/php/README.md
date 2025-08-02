# 問題

**整数で構成される二分木の根ノード root が与えられるので、前順を表す配列を返す、preOrderTraversal という関数を作成する**  

## 関数の目的

与えられた二分木の根ノードから、前順で走査した結果を配列として返すこと

## この問題に取り組む目的

木構造の走査における「前順走査」を実装できるようにすること

## 入出力仕様

**入力**: `binaryTree<integer> root`  
**出力**: `integer[]`  

## テストケース
1. `preorderTraversal(toBinaryTree([0,-10,5,null,-3,null,9]))--> [0,-10,-3,5,9]`  
2. `preorderTraversal(toBinaryTree([5,3,6,2,4,null,7]))--> [5,3,2,4,6,7]`  
3. `preorderTraversal(toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]))--> [-2,-17,-18,-11,-4,8,3,19,25] `  
4. `preorderTraversal(toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]))--> [3,-3,-7,-10,-4,1,0,2,13,6,5,8,18,15,19]`   
5. `preorderTraversal(toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]))--> [1,-5,-9,-6,-4,0,15,10,14,17,16,19]`  
6. `preorderTraversal(toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]))--> [3,-3,-7,-10,-4,1,0,2,13,6,5,8,18,15,19]`

## 想定されるエラー・エッジケース

- root が `null`: 空配列を返す

## 前提知識

**前順走査**  
ノードの探索順  
1. 根ノード
2. 左の子ノード
3. 右の子ノード

※ 走査とは、構造の中にあるすべての要素を決まった順番でたどること

## 仮説・検証

### 仮説

前順走査は「根→左→右」という処理を全ノードに適用する構造であるため、再帰が自然に対応できる

#### 実装方針

**構造**  
再帰関数を使って前順走査を実装する  

**状態（結果）を保持する場所**  
前順の走査結果を配列に格納する必要があるため、補助関数内で参照渡しされた配列を更新していく  

**関数の役割分担**  
メイン関数では、結果配列の初期化と戻り値の返却までを行なう  
補助関数では、再帰処理により配列に結果を追加していく処理に集中

#### この実装方針にした理由
メイン関数内で、配列の返却・配列の状態管理・再帰処理を同時に行なうと処理内容が混在してしまうため、  
メイン関数では配列の初期化と結果の返却、補助関数では再帰処理による配列の状態管理 と分けるようにした  

### 検証

仮説のとおり実装し、期待どおりテストケースの出力結果が得られた

## ふりかえり

- 再帰関数の「戻り」の考え方にまだまだ慣れていないと実感した

- 1関数1目的をできるだけ守り、再利用性を考える視点を今後も持ち続けていこうと思った

- 関数を実装するときには、何を入力として受け取り、どんな処理を行ない、どんな結果が得られるのか、を常に意識するようにすること

## 直面したエラーと解決策

- エラーや困った点はなかった

## フィードバック・改善点

- 引数の名前
rootは毎回変わるので、改善前の変数名は木全体のノードを意味してしまうようにも取れてしまう  
→ 誤解を招く可能性がある

```php
// 改善前(命名意図: 木の根ノード)
$tRoot

// 改善後(命名意図: 処理しているノード)
$node
```

- 補助関数で処理だけに専念する

```php
// 改善前
function preorderTraversal(?BinaryTree $root): array
{
    $res = [];
    return preorderTraversalHelper($root, $res);
}

function preorderTraversalHelper(?BinaryTree $tRoot, array &$arr): array
{
    if($tRoot !== null){
        $arr[] = $tRoot->data;
        preorderTraversalHelper($tRoot->left, $arr);
        preorderTraversalHelper($tRoot->right, $arr);
    }

    return $arr;
}

// 改善後: 補助関数では再帰処理に専念
function preorderTraversal(?BinaryTree $root): array
{
    $res = [];
    preorderTraversalHelper($root, $res)
    return $res;
}

function preorderTraversalHelper(?BinaryTree $tRoot, array &$arr): void
{
    if($tRoot !== null){
        $arr[] = $tRoot->data;
        preorderTraversalHelper($tRoot->left, $arr);
        preorderTraversalHelper($tRoot->right, $arr);
    }
}
```