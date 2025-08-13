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



#### 実装方針
  


#### この実装方針にした理由

 

### 検証



## ふりかえり



## 直面したエラーと解決策



## フィードバック・改善点

