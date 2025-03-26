# Book オブジェクトを配列に格納して、配列内の各オブジェクトのクラス変数及びインスタンス変数を出力する printBookArray という関数を作成し、テストケースを出力する問題
目的：配列にオブジェクトを格納すること<br>

## データ型
`String author`: Stephen Hawkings という著者の名前をクラス変数として作成してください。<br>
`String title`: 本のタイトル<br>
`String year`: 本が公開された年<br>

## テストケース
`books = []`<br>
`books.push(new Book("How Did It All Begin?", "2021"))`<br>
`books.push(new Book("The Theory of Everything", "2010"))`<br>
`books.push(new Book("God Created the Integers", "2006"))`<br>

`printBookArray(books)`<br>
--> How Did It All Begin? written by Stephen Hawkings in 2021<br>
--> The Theory of Everything written by Stephen Hawkings in 2010<br>
--> God Created the Integers written by Stephen Hawkings in 2006<br>

## 解き方
・条件に基づきクラスを実装する<br>
・空の配列を格納する変数を用意し、そこにオブジェクトを格納する<br>
・printCardArray関数をクラスの外部に実装する<br>

## 工夫した点
**JavaScript**
・`+`により文字列の連結ではなく、テンプレートリテラルを使って文字列を表現したこと<br>

## わかったこと
・静的メンバ変数にアクセスするには、変数名の前に所属するクラス名を明記することでアクセスできること<br>
・オブジェクトのプロパティにアクセスするときも、テンプレートリテラルが使用できること<br>

## 注意点
・配列にはオブジェクトそのものではなく、オブジェクトの参照が格納されること<br>
