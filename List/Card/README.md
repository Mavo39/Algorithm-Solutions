# Card クラスを作成し、Card オブジェクトを配列に格納して、配列内の各オブジェクトのインスタンス変数を出力する printCardArray という関数を作成し、テストケースを出力する問題
目的：配列にオブジェクトを格納すること<br>

## データ型
`String suit`: カードの記号（♣, ♦, ♥, ♠）を表す<br>
`String value`: カードの値（A,2, ... ,K）<br>
`String intValue`: カードの数値（1 ~ 13）<br>

## テストケース
`cards = [];`<br>
`cards.push(new Card("♣", "A", "1"))`<br>
`cards.push(new Card("♦", "K", "13"))`<br>
`cards.push(new Card("♥", "Q", "12"))`<br>
`cards.push(new Card("♠", "J", "11"))`<br>

`printCardArray(cards)`<br>
`--> ♣A(1)`<br>
`--> ♦K(13)`<br>
`--> ♥Q(12)`<br>
`--> ♠J(11)`<br>

## 解き方
・クラスを実装する<br>
・printCardArray関数をクラスの外部に実装する<br>

## 工夫した点 
・普段はJavaScriptでエクスポートするときは、オブジェクトとして波括弧でまとめてエクスポートしていたが、今回は、個別にエクスポートしてみたこと<br>
・PHPで普段使っていなかったforeachをつかってループ処理を実装したこと<br>
・配列の初期化時にまとめてオブジェクトを格納したこと

## 注意点
・配列にはオブジェクトそのものではなく、オブジェクトの参照が格納される。
