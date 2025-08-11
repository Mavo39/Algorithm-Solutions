# 問題

**整数で構成される二分木の根ノード root が与えられるので、逆間順を表す配列を返す、reverseInorderTraversal という関数を作成する** 

## 関数の目的

与えられた二分木の根ノードから、逆間順で走査した結果を配列として返すこと

## この問題に取り組む目的

木構造の走査における「逆間順走査」を実装できるようにすること

## 入出力仕様

**入力**: `binaryTree<integer> root` 
**出力**: `integer[]` 

## テストケース
1. `reverseInorderTraversal(toBinaryTree([0,-10,5,null,-3,null,9]))--> [9,5,0,-3,-10]` 
2. `reverseInorderTraversal(toBinaryTree([5,3,6,2,4,null,7]))--> [7,6,5,4,3,2]` 
3. `reverseInorderTraversal(toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]))--> [25,19,8,3,-2,-4,-11,-17,-18] ` 
4. `reverseInorderTraversal(toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]))--> [19,18,15,13,8,6,5,3,2,1,0,-3,-4,-7,-10]`  
5. `reverseInorderTraversal(toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]))--> [19,17,16,15,14,10,1,0,-4,-5,-6,-9]` 
6. `reverseInorderTraversal(toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]))--> [19,18,15,13,8,6,5,3,2,1,0,-3,-4,-7,-10]`

## 想定されるエラー・エッジケース

- root が `null`: 空配列を返す

## 前提知識

**逆間順走査** 
ノードの探索順 
1. 右の子ノード
2. 根ノード
3. 左の子ノード

## 仮説・検証

### 仮説

逆間順走査は「右→根→左」という処理を全ノードに適用する構造であるため、再帰が自然に対応できる

#### 実装方針
  
**構造** 
再帰関数を使って逆間順走査を実装する 
  
**状態（結果）を保持する場所** 
逆間順の走査結果を配列に格納する必要があるため、補助関数内で参照渡しされた配列を更新していく 
  
**関数の役割分担** 
メイン関数: 配列の初期化、結果配列を補助関数経由で返す
補助関数: 再帰処理による配列の更新を行ない、処理結果の配列を返す

#### この実装方針にした理由

- 処理内容である、配列の返却・配列の状態管理・再帰処理を一つの関数で行なうと見通しが悪くなってしまうため 

### 検証

仮説に基づいた実装を行ない、期待通りの出力が得られた  
ただし、最初は実装したコードでエラーが発生した  
その原因は、補助関数内の再帰処理で、引数として配列を渡していなかったことによるもの  

## ふりかえり

- 記事を参考にしながら、JSON形式でテストケースの配列を整理してみた結果、アクセス方法を学ぶことができた
- オブジェクトにアクセスする方法は、言語によって異なることを実感した。PHPでは「->」によってアクセスするが、JavaScriptでは「.」でアクセスするように違うこと
- 配列を比較するには、参照の比較と中身の比較が異なることに気づいたのはファインプレーだった（初期のテスト実行の結果がすべて"False"だったことから気づいた）
- toString() と JSON.stringify() の違いについて
- toString()
1. 配列の要素をカンマで区切る
2. 多次元配列であっても、結果は1次元配列のように出力される
3. 単純な文字列比較に適している
- JSON.stringify()
1. オブジェクトの構造をJSON形式で表現される
そのため、ネスト構造であってもその構造を維持したまま文字列として出力される点が、toString() と異なる
2. オブジェクトの正確な比較に適している 
- for...in ループ: 配列のインデックス（"0", "1" など）をキーとして返す
- for...of ループ: 配列の要素の値そのものを直接返す

```js: 例
const arr1 = [1,2,[3,4]];

// toString()
console.log(arr1.toString()); // [1,2,3,4]

// JSON.stringify()
console.log(JSON.stringify(arr1)); // [1,2,[3,4]]
```

## 直面したエラーと解決策

### エラー1

#### 内容
モジュールが見つからない

```: エラーメッセージ
node reverseInorderTraversal.js
node:internal/modules/cjs/loader:1146
  throw err;
  ^

Error: Cannot find module '/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/tests/reverseInorderTraversal.js'
    at Module._resolveFilename (node:internal/modules/cjs/loader:1143:15)
    at Module._load (node:internal/modules/cjs/loader:984:27)
    at Function.executeUserEntryPoint [as runMain] (node:internal/modules/run_main:135:12)
    at node:internal/main/run_main_module:28:49 {
  code: 'MODULE_NOT_FOUND',
  requireStack: []
}

Node.js v20.12.2
```

#### 原因
呼び出しファイルが異なっていたこと

```
// 正
node reverseInorderTraversalTest.js 

// 誤
node reverseInorderTraversal.js
```

### エラー2

#### 内容
- 未定義のプロパティにアクセスできない  
- reverseInorderTraversalHelperの9行目で発生

```: メッセージ内容
    arr.push(root.data);
        ^

TypeError: Cannot read properties of undefined (reading 'push')
    at reverseInorderTraversalHelper (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/src/reverseInorderTraversal.js:9:9)
    at reverseInorderTraversalHelper (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/src/reverseInorderTraversal.js:8:5)
    at reverseInorderTraversalHelper (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/src/reverseInorderTraversal.js:8:5)
    at reverseInorderTraversal (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/src/reverseInorderTraversal.js:2:12)
    at reverseInorderTraversalTest (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/tests/reverseInorderTraversalTest.js:35:24)
    at Object.<anonymous> (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/tests/reverseInorderTraversalTest.js:42:1)
    at Module._compile (node:internal/modules/cjs/loader:1369:14)
    at Module._extensions..js (node:internal/modules/cjs/loader:1427:10)
    at Module.load (node:internal/modules/cjs/loader:1206:32)
    at Module._load (node:internal/modules/cjs/loader:1022:12)

Node.js v20.12.2
```

#### 原因
reverseInorderTraversalHelper に配列 arr を渡していないこと

### エラー3

#### 内容
- 未定義のプロパティにアクセスできない
- toBinaryTree関数を定義した箇所で発生している

```: メッセージ内容
/Users/mavo/project/algorithm-solutions/binary-tree/src/js/toBinaryTree.js:4
    let l = arr.length;
                ^

TypeError: Cannot read properties of undefined (reading 'length')
    at toBinaryTree (/Users/mavo/project/algorithm-solutions/binary-tree/src/js/toBinaryTree.js:4:17)
    at reverseInorderTraversalTest (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/tests/reverseInorderTraversalTest.js:33:22)
    at Object.<anonymous> (/Users/mavo/project/algorithm-solutions/binary-tree/problems/12_reverseInorderTraversal/js/tests/reverseInorderTraversalTest.js:41:1)
    at Module._compile (node:internal/modules/cjs/loader:1369:14)
    at Module._extensions..js (node:internal/modules/cjs/loader:1427:10)
    at Module.load (node:internal/modules/cjs/loader:1206:32)
    at Module._load (node:internal/modules/cjs/loader:1022:12)
    at Function.executeUserEntryPoint [as runMain] (node:internal/modules/run_main:135:12)
    at node:internal/main/run_main_module:28:49

Node.js v20.12.2
```

#### 原因

- 配列が存在しない
- オブジェクトへのアクセス方法が違う（今回のケースはこちらだった）

#### 解決策
キーを使ってオブジェクトにアクセスする

```js
    for(let key in tests){
        const test = tests[key]; // キーを使ってオブジェクト（case1, case2...)にアクセス
    ...
    }
```

### エラー4

#### 内容
出力結果がすべて "False"

#### 原因
配列の参照を比較していること

#### 解決策
配列を文字列に変換し、文字列を比較することで中身の比較を行なう  
ただし、当初 toString() で内容比較を行なっていたが、JSON.stringify() の方がより正確な比較ができるとわかり、後に修正


## フィードバック・改善点

### 改善1
JSON.stringify() を使用した、より正確な比較を行なう

```js
// 改善前
resArr.toString() === expected.toString()..

// 改善後
JSON.stringify(resArr) === JSON.stringify(expected) ..
```

### 改善2
for...of ループの使用することで、オブジェクトを取得してからプロパティにアクセスする、という手順を踏まなくてよくなる

```js
// 改善前
    for(let key in tests){
        const test = tests[key];
        const root = toBinaryTree(test.input);
        ...
    }

// 改善後
    for(let test of tests){
        const root = toBinaryTree(test.input);
    }
```
