# 配列 intArr が与えられるので、完全二分木の構造をレベル順で表す toBinaryTree 関数を実装する問題
※ レベル順とは、ツリーの最上位（根）から順に、各階層ごとに左から右へノードをたどる探索方法のことを指します  
※ 与えられた配列（＝レベル順）をもとに木を「構築」する関数をつくること  

## 関数の入出力例
入力のデータ型： `integer[] intArr`  
出力のデータ型： `integer[]`  


## テストケース
1. `toBinaryTree([0,-10,5,null,-3,null,9]) --> root.data: 0`  
2. `toBinaryTree([5,2,18,-4,3]) --> root.left.data: 2`  
3. `toBinaryTree([27,14,35,10,19,31,42]) --> root.left.right.data: 19`  
4. `toBinaryTree([10,null,3]) --> root.left: null`  
5. `toBinaryTree([10,9]) --> root.data: 10`  
6. `toBinaryTree([null]) --> root.data: null`  
※ `root`変数に各木構造を格納する  

## 思考プロセス
#### 【ゴール】  
toBinaryTree 関数を正しく実装し、配列を木構造に変換すること  

#### 【仮説】  
**【関数の目的】**  
配列を木構造に変換すること  

**【必要な要素】**
1. BinaryTreeクラスの実装
※ [code](../../src/php/BinaryTree.php)に定義済み  

2. toBinaryTree 関数の実装  
- 配列が空 または null が格納されているケースの対応
- 新たに生成したノードを格納する配列を用意する
- ノードの左と右の要素を順番に処理するため、キューを使用する
- ループ処理により、現在見ているノードの左と右のノードをキューに追加していく
- 配列の最後の要素まで処理したとき、ループを終了する
- 左と右の要素でそれぞれ null でないときに新たな要素を生成する

#### 【検証】  
- 仮説に沿って実装し、期待通りの結果が得られた
- ただし、仮説の粒度が少し粗かった
- 具体的には配列の要素を見ていくためのループカウンタについての言及がなかった

## 【悩んだ箇所】
ループ条件をどうするか
- 当初 for ループで実装したが、一回のループで現在のノードの左右のインデックスをカウンタで管理できないとわかった
- そこで、while ループを使用した
while ループの終了条件
- 当初、「キューが空になるまで」としていた
- しかし、これだと途中で `null` が連続してキューに格納されたときに、その後に要素があっても対象にならなくなってしまうとわかった
- 配列を最後まで見ることが目的だったので、その目的に照らして条件を配列の要素の最後までに設定した

## 【直面したエラーと解決策】  
エラーはなかった 

## 【気づき】
- `for` ループと `while` ループの使い分けを考えさせられる問題だった
→ 一度のループでカウンタを2回以上更新できるという柔軟性が `while` ループにはあるとわかった
- `?int`という選択肢を知っていたことでデータ型の指定で迷うことがなかった

## 【フィードバック・改善点】
- 変数の初期化を明示的にすること
`$queue[] = $root;` よりも、`$queue = [$root]` の方が意図が伝わりやすく、可読性が高い