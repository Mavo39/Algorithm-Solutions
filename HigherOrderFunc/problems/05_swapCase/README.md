# 問題

**文字で構成される配列 charList が与えられるので、大文字は小文字に、小文字は大文字に変換し新しい配列を返す swapCase という関数を map 関数を使用して作成する問題**  

### 入力のデータ型

`char[] charList`  

### 出力のデータ型

`char[]`  

### テストケース

| 番号 | 入力 | 出力 |
| - | - | - |
| 1 | ['l','A','m','b','D','A'] | [L,a,M,B,d,a] | 
| 2 | ['a','E','s','P','A'] | [A,e,S,p,a] |
| 3 | ['f','U','N','c','T','I','o','n'] | [F,u,n,C,t,i,O,N] | 

## この問題に取り組む目的

map 関数を使いこなすための練習をすること  

## 仮説・検証

### 仮説

- 文字配列の文字を1つずつ検証する  
- 検証ロジックは if 文を使用する

#### 実装方針
  
- map 関数の基本的な理解  
参照: https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Array/map

- map 関数内でラムダ式を記述する

#### この実装方針にした理由

文字が特定の条件（大文字なら小文字に、小文字なら大文字に変換）を満たす必要があるため

### 検証

実装方針に基づいた実装で処理の流れは実装できたが、詳細には正規表現を使用することで文字の検証を行なった  
これにより、期待通りの出力結果を得ることができた

## ふりかえり

- 元の文字列を小文字にして、、、など、文字列の検証ロジックを考えたが、正規表現を使うことで簡単に実装できた  
- map 関数の中でラムダ式を使って、要素に対して1つずつ何かしらの処理を行なうという流れを理解できた  

## 直面したエラーと解決策

### 内容

テストケースの結果がすべて False になる

```sh:
Test case1: False
Test case2: False
Test case3: False
```

```js: 改善前
const swapCase = require('../src/swapCase.js');

const tests = {
    "case1": {
        "input": ['l','A','m','b','D','A'],
        "output": ['L','a','M','B','d','a']
    },
    "case2": {
        "input": ['a','E','s','P','A'],
        "output": ['A','e','S','p','a']
    },
    "case3": {
        "input": ['f','U','N','c','T','I','o','n'],
        "output": ['F','u','n','C','t','i','O','N']
    }
}

for(let [key, value] of Object.entries(tests)){
    const output = swapCase(value['input']);
    const result = output === value['output'] ? "True" : "False";
    console.log(`Test ${key}: ${result}`);
}
```

### コンソールに出力

```js
for(let [key, value] of Object.entries(tests)){
    const output = swapCase(value['input']);
    console.log(output); // 追加
    const result = output === value['output'] ? "True" : "False";
    console.log(`Test ${key}: ${result}`);
}
```

```sh: 出力結果
[ 'L', 'a', 'M', 'B', 'd', 'a' ]
Test case1: False
[ 'A', 'e', 'S', 'p', 'a' ]
Test case2: False
[
  'F', 'u', 'n',
  'C', 't', 'i',
  'O', 'N'
]
Test case3: False
```

内容は期待している出力結果と同じだが、False になっていることがわかった

### 原因

配列の比較の仕方  
現状だと配列の参照の比較になっている  

### 解決策

`JSON.stringify()` を使って、文字列を比較する  

```js: 改善後
for(let [key, value] of Object.entries(tests)){
    const output = swapCase(value['input']);
    const result = JSON.stringify(output) === JSON.stringify(value['output']) ? "True" : "False"; // JSON.stringify()を使用
    console.log(`Test ${key}: ${result}`);
}
```

#### 学び

- map 関数は「何がしたいか」という結果に焦点が当たることがわかった
- map 関数は主にリスト（配列）の各要素に関数を適用し、新しいリストを作成するために使用するということがわかった
→ リストの要素を変換し、新しいリストが必要な場合に最適
- 別解の条件の作り方は、自分では思いつかない考え方だった  
- エラー内容は過去にも同じことでエラーが発生していたので気をつけたい  

## フィードバック・改善点

別の解法として、を小文字に変換したときに、元の文字を同じ場合は大文字に、そうでない場合は小文字に変換する方法もある  

```js
function swapCase(charList) {
    return charList.map(char => 
        char === char.toLowerCase() ? char.toUpperCase() : char.toLowerCase()
    );
}
```
