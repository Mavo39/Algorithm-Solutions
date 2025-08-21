# 問題

**完全二分木（complete binary tree）が与えられるので、ノードの数を返す、countNodes という関数を作成する**  

## 関数の目的

完全二分木におけるノードの数を返すこと

## この問題に取り組む目的

完全二分木におけるノードの数を求めるロジックを実装できるようにすること

## 入出力仕様

**入力**: `binaryTree<integer> root` 
**出力**: `integer` 

## テストケース
1. `countNodes(toBinaryTree([6,11,25]))--> 3` 
2. `countNodes(toBinaryTree([1,1,2,15,8]))--> 5`
3. `countNodes(toBinaryTree([6,11,25,5,9,8,4,56]))--> 8` 
4. `countNodes(toBinaryTree([27,14,35,10,19,31,42]))--> 7` 
5. `countNodes(toBinaryTree([30,15,60,7,22,45,75,17,27,12,14,5,79,110]))--> 14` 


## 想定されるエラー・エッジケース

- root が null のとき: 0 を返す

## 仮説・検証

### 仮説

走査しながらノードを数を求めていく

#### 実装方針
  
幅優先探索を行ない、ノードをカウントしていく

#### この実装方針にした理由

深さ優先探索と幅優先探索があるが、幅優先探索の場合、

- カウント処理がシンプル
- 再帰処理によるスタックオーバーフローのリスクを回避できる

といったことができるため

### 検証

実装方針に基づき実装した結果、期待された出力結果を得ることができた

## ふりかえり

- Object.entries()という方法があることを知り、実際に使ってみたところ、キーと値のペアに対して便利であることがわかった
- 変数に格納する・しないの判断がしっかりとした根拠をもってできるようにしていきたい
- 過去に一度取り組んだかどうかで、実装スピードが違うことを実感した。今回のケースでいうところの、テストケースと出力結果をオブジェクトで管理すること

## 直面したエラーと解決策

### エラー1
```
node countNodeTest.js
node:internal/modules/cjs/loader:1146
  throw err;
  ^

Error: Cannot find module '/Users/mavo/project/algorithm-solutions/binary-tree/problems/14_countNodes/js/tests/countNodeTest.js'
    at Module._resolveFilename (node:internal/modules/cjs/loader:1143:15)
    at Module._load (node:internal/modules/cjs/loader:984:27)
    at Function.executeUserEntryPoint [as runMain] (node:internal/modules/run_main:135:12)
    at node:internal/main/run_main_module:28:49 {
  code: 'MODULE_NOT_FOUND',
  requireStack: []
}

Node.js v20.12.2
```

#### 原因: コマンドミス
```sh
# 正
node countNodesTest.js  

# 誤
node countNodeTest.js  
```

### エラー2

#### メッセージ

```
    for(let test of tests){
                    ^

TypeError: tests is not iterable
    at countNodesTest (/Users/mavo/project/algorithm-solutions/binary-tree/problems/14_countNodes/js/tests/countNodesTest.js:28:21)
    at Object.<anonymous> (/Users/mavo/project/algorithm-solutions/binary-tree/problems/14_countNodes/js/tests/countNodesTest.js:37:1)
    at Module._compile (node:internal/modules/cjs/loader:1369:14)
    at Module._extensions..js (node:internal/modules/cjs/loader:1427:10)
    at Module.load (node:internal/modules/cjs/loader:1206:32)
    at Module._load (node:internal/modules/cjs/loader:1022:12)
    at Function.executeUserEntryPoint [as runMain] (node:internal/modules/run_main:135:12)
    at node:internal/main/run_main_module:28:49
```

#### 意味

tests はイテラブルではない

#### 原因

- `for...of` はイテラブル専用のループ
- 通常のオブジェクト ({}) はイテラブルではない  
→ testsはオブジェクトである

#### 解決策
Object.values() or Object.entries() を使用する

```js
// 改善前
function countNodesTest(tests){
    for(let test of tests){
        const root = toBinaryTree(test['input']);
        const res = countNodes(root);
        const resCheck = (res === test['output']) ? "True" : "False";

        console.log(`Test ${key}: ${resCheck}`);
    }
}

// 改善後
function countNodesTest(tests){
    for(let [key, test] of Object.entries(tests)){
        const root = toBinaryTree(test['input']);
        const res = countNodes(root);
        const resCheck = (res === test['output']) ? "True" : "False";

        console.log(`Test ${key}: ${resCheck}`);
    }
}
```

#### 学び
`for...of` はイテラブル専用のループなので、オブジェクトには使えないこと


## フィードバック・改善点


