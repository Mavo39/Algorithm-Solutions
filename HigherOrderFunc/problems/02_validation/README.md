# 問題

**メールアドレスが正しい形式であるかを検証する関数 emailValidation を作成する問題**  
この関数は、指定された検証ルール（validator）に基づいて、メールアドレスをチェックし、結果に応じたメッセージを返す必要があります。  
以下の 3 つの検証ルールをラムダ関数として実装すること   
各ラムダ関数は特定の条件を満たすかどうかをチェックし、その結果に基づいて emailValidation 関数は適切なメッセージを文字列として返します。  
これらの関数を使って、指定されたメールアドレスが適切な形式であるかを検証すること  

### 各ラムダ関数

#### `bool doesNotStartWithAt(string email)`
email が `@` で始まらない場合に true を返し、`@` で始まる場合には false を返すラムダ関数  

#### `bool doesNotHaveSpace(string email)`
email に空白が含まれていない場合に true を返し、空白が含まれている場合には false を返すラムダ関数  

#### `bool hasUppercaseAndLowercase(string email)`
email に大文字と小文字が両方含まれている場合に true を返し、含まれていない場合には false を返すラムダ関数  


## この問題に取り組む目的

- 複数のラムダ関数を定義し、関数を再利用する方法を身につけること  
- 可読性や保守性を実装を通じて学ぶこと  


## テストケース

| ケース | 入力 | 出力 |
| - | - | - |
| 1 | emailValidation(doesNotStartWithAt, "@gmail.com") | `Email is not correct.` |
| 2 | emailValidation(doesNotStartWithAt, "kkk@gmail.com") | `Email is correct.` |
| 3 | emailValidation(doesNotHaveSpace, "Hello world") | `Email is not correct.` |
| 4 | emailValidation(doesNotHaveSpace, "Helloworld") | `Email is correct.` |
| 5 | emailValidation(hasUppercaseAndLowercase, "hello world") | `Email is not correct.` |
| 6 | emailValidation(hasUppercaseAndLowercase, "HELLO WORLD") | `Email is not correct.` |
| 7 | emailValidation(hasUppercaseAndLowercase, "Hello world") | `Email is correct.` |
| 8 | emailValidation(hasUppercaseAndLowercase, "") | `Email is not correct.` |


## 想定されるエラー・エッジケース

- emailが空の文字列

## 仮説・検証

### 仮説

関数を3つ実装し、emailValidation 関数に当てはめる  

#### わかっていること

- emailValidationでは「ラムダ関数」と「文字列」を使用するが、「ラムダ関数」は3つの関数から選択可能  
- emailValidationでは「ラムダ関数」と「文字列」を使用し、文字列を返す 
- 「文字列」は「ラムダ関数」に渡すために使用する

#### 実装方針
  
- ラムダ関数を3つ実装する
- emailValidation 関数を実装する

#### この実装方針にした理由

- 3つの検証ルールをそれぞれ独立したラムダ関数として実装し、それらをemailValidation関数に渡すという設計にする、という問題の要件を満たすため
- 検証ルールを個別のラムダ関数として定義することで、それぞれのルールを再利用できるため

### 検証



## ふりかえり



## 直面したエラーと解決策



#### 学び



## フィードバック・改善点


