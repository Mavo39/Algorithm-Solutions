# 問題

**二分木 root が与えられるので、最大の深さを返す、maximumDepth という関数を作成する**  
**ここでいう最大の深さとは、根ノードから最も遠い葉ノードまでの最長経路に沿ったノードの数を指します**  

## 関数の目的

根ノードから最も遠い葉ノードまでに要した最大の辺の数を返すこと

## この問題に取り組む目的

木構造における辺の数を求めるロジックを実装できるようにすること

## 入出力仕様

**入力**: `binaryTree<integer> root` 
**出力**: `integer` 

## テストケース
1. `maximumDepth(toBinaryTree([0]))--> 0` 
2. `maximumDepth(toBinaryTree([0,1,null]))--> 1` 
3. `maximumDepth(toBinaryTree([0,-10,5,null,-3,null,9]))--> 2` 
4. `maximumDepth(toBinaryTree([5,2,18,-4,3]))--> 2` 
5. `maximumDepth(toBinaryTree([27,14,35,10,19,31,42]))--> 2` 
6. `maximumDepth(toBinaryTree([30,15,60,7,22,45,75,null,null,17,27]))--> 3`
7. `maximumDepth(toBinaryTree([90,50,150,20,75,95,175,5,25,66,80,92,111,166,200]))--> 3`
8. `maximumDepth(toBinaryTree([50,17,76,9,23,54,null,null,14,19,null,null,72]))--> 3` 
9. `maximumDepth(toBinaryTree([16,14,10,8,7,9,3,2,4,1]))--> 3` 
10. `maximumDepth(toBinaryTree([30,15,60,7,22,45,75,1,null,17,27,null,null,null,null,-1]))--> 4`


## 想定されるエラー・エッジケース

- root が  null のとき: 0 を返す
- root の値が 0 のとき: 0を返す

## 仮説・検証

### 仮説

- 根ノードから葉ノードに向かって移動しながら辺の数をカウントする
- 最終的に左のノードと右のノードの辺の数を比較して大きい方を取得する

#### 実装方針
  
再帰の結果を返すメイン関数と、再帰処理によって辺の数をカウントする補助関数に分けて実装する

#### この実装方針にした理由

再帰処理は処理の流れが見えづらいことから、再帰処理の部分は補助関数に一任するため

### 検証

仮説に基づき実装した結果、期待通りの出力結果が得られた  
ただし、最初に実装したコードではできなかったため、リファクタリングを実施した

## ふりかえり

- 問題の特定していく方法を少しずつだが、自分でできるようになってきた。
- 自動テスト関数を作成して実行した結果、一部の結果が `False` になったとき、なぜこのような結果になったのかを知るために、最初にすべてのテストケースの出力結果を出力する記述を追加し、何が起きているのかの把握から入ったことはよかった。これによって、「想定よりも1足りない」という事実を知ることができたため、問題の特定がしやすくなった。

```php: maximumDepthTest.phpで実装したコードの一部より
foreach($tests as $i => $test){
    $root = toBinaryTree($test['input']);
    $result = maximumDepth($root);
    $expected = $test['output'];
    $resultCheck = $result === $expected ? "True" : "False";

    echo "Test case {$i} : {$resultCheck}" . PHP_EOL;
    echo $result . PHP_EOL; // 追加
}
```

## 直面したエラーと解決策

### 内容
自動テスト関数の実装結果の一部が `False` になった

### 原因
後置インクリメントを使用したことで、再帰関数に引数を渡した時に元の値と同じであったこと

```php: maximumDepthHelper関数
// 改善前
    $leftDepth = ($root->left !== null) ? maximumDepthHelper($root->left, $count++) : $count;
    $rightDepth = ($root->right !== null) ? maximumDepthHelper($root->right, $count++) : $count;

// 改善後
    $leftDepth = ($root->left !== null) ? maximumDepthHelper($root->left, $count + 1) : $count;
    $rightDepth = ($root->right !== null) ? maximumDepthHelper($root->right, $count + 1) : $count;
```

## フィードバック・改善点

- `if($root->left === null && $root->right === null) return 0;` の記述はなくてもいい

- 補助関数を使わず、葉ノードから根ノードに「戻る」過程で深さを積み上げる方法もある

```php: 解答例（戻り値に1足していく方法）
function maximumDepth(?BinaryTree $root): int
{
    if ($root === null) return 0;

    $leftDepth = maximumDepth($root->left);
    $rightDepth = maximumDepth($root->right);

    return max($leftDepth, $rightDepth) + 1;
}
```