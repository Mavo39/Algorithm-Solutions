# 犬をデータとして表すDog クラスを作成し、テストケースを出力する問題

## データ
`String name`: 犬の種類の名前<br>
`int size`: 犬のサイズ<br>
`int age`: 犬の年齢<br>
`String bark()`: 犬の鳴き声を文字列として返す。<br>
・犬のサイズが 50 以上の時、Wooof! Woof!<br>
・サイズが 20 以上の時、Ruff! Ruff!<br>
・それ以外の時は、Yip! Yip! と返す。<br>
`int calcHumanAge()`: 犬の年齢から人間の年齢に換算する。<br>
人間の年齢＝ 12 +（犬の年齢 - 1）× 7 を使用すること。<br>

## テストケース
`goldenRetriever = new Dog("Golden Retriever", 60, 10)`<br>
`goldenRetriever.bark() --> Wooof! Woof!`<br>
`goldenRetriever.calcHumanAge() --> 75`<br>

`siberianHusky = new Dog("Siberian Husky", 55, 6)`<br>
`siberianHusky.bark() --> Wooof! Woof!`<br>
`siberianHusky.calcHumanAge() --> 47`<br>

`poodle = new Dog("poodle", 10, 1)`<br>
`poodle.bark() --> Yip! Yip!`<br>
`poodle.calcHumanAge() --> 12`<br>

`shibaInu = new Dog("shibaInu", 35, 4)`<br>
`shibaInu.bark() --> Ruff! Ruff!`<br>
`shibaInu.calcHumanAge() --> 33`<br>

## 解き方
・クラスを作成し、個別にインスタンスを作成する<br>

## 試したこと
・switch文を使って実装したこと<br>