# 以下に従って、Queue クラスを作成する問題


## 【Node クラス】
#### プロパティ
`int data: 要素の値`   
`Node next: 1つ先のノード`  
next はデフォルトでは null を設定  

## 【Queue クラス】
#### プロパティ
`Node head: 先頭ノード, デフォルトでは null に設定`  
`Node tail: 末尾ノード, デフォルトでは null に設定`  

#### メソッド
`Integer peekFront(): キューの先頭の Node の値を返す`  
`Integer peekBack(): キューの末尾の Node の値を返す`  
`void enqueue(int data): キューの末尾に Node を挿入`  
`Integer dequeue(): キューの先頭の Node を取り除き、その値を返す`  


## 【テストケース】
`q = new Queue()`  
`q.enqueue(4)`  
`q.peekFront() --> 4`  
`q.peekBack() --> 4`  
`q.enqueue(50)`  
`q.peekFront() --> 4`  
`q.peekBack() --> 50`  
`q.enqueue(64)`  
`q.peekFront() --> 4`  
`q.peekBack() --> 64`  
`q.dequeue() --> 4`  
  

## 【思考プロセス】
#### ◾️ゴール  
Queueクラスを正しく実装すること  

#### ◾️仮説
【目的】Queueクラスを正しく実装すること  

【必要な要素】
  
1. Node クラスの定義  
- データを保持する変数  
- 次のノードを指し示すポインタを格納する変数  
  
2. Queue クラスの定義    
- 先頭ノードを head 変数で管理する  
- 末尾ノードを tail 変数で管理する
- 各メソッドを指定された要件に基づき実装する  　


#### ◾️検証  
仮説に基づき実装し、期待通りの結果が得られた    

## 【悩んだ箇所】
- import/export が使えなかったこと  
ES ModuleとCommonJSは実行環境の違いということ  


## 【直面したエラーと解決策】
**エラー①**  
【エラーメッセージ】  
```sh
(node:74503) Warning: To load an ES module, set "type": "module" in the package.json or use the .mjs extension.
(Use `node --trace-warnings ...` to show where the warning was created)
/~/algorithm-solutions/Queue/Common/js/Queue.test.js:1
import { Queue } from './Queue.js';
^^^^^^

SyntaxError: Cannot use import statement outside a module
```

【意味・解説】  
.js ファイル内の import 文が 「モジュールとして認識されていない環境で使われた」ため文法エラーになった
  
Node.jsは import / export のようなESモジュール構文を処理するために、  
・package.json に "type": "module" があるか  
・ファイルの拡張子が .mjs である必要がある  
というルールがある。  
どちらも満たしていない場合、Node.jsは .js ファイルを CommonJSモジュール として扱うため、ESモジュール構文を使うとエラーになる。  

Queue.test.js で import を使っているけど、Node.jsはこれをCommonJSとして解釈しようとしている
だから import は使えず、文法エラーが出ている
ESモジュールとして認識させる設定がされていない

【解決プロセス】
- メッセージの意味をChatGPTに日本語訳してもらう
- CommonJSとESモジュールのことを質問する
- 意味を理解し、テストを実装することが目的であるため、今回はCommonJSを使って実装

【解決策】
- ESモジュールに統一する
または
- CommonJSにする

## 【気づき】
- これまで意味をしっかり理解せずに`module.exports`や`import`などを使っていると気づいた  
- テストケースを実装したファイル名には関数名などをつけ、どの関数・クラスのテストケースかをわかるように命名する必要があること  

## 【フィードバック・改善点】
- dequeueメソッドでtailの更新が必要
```js
// 改善前
if(this.head === null) return null;

// 改善後
if(this.head === null){
    this.tail = null;
}
```
