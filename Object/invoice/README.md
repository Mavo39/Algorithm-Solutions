# Invoice クラスを作成し、テストケースを出力する問題
この問題は**Productクラス**、**InvoiceItemクラス**で作成したプロパティ・メソッドを使用します。<br>

## データ
`String invoiceNumber`: 請求書番号<br>
`InvoiceItem invoiceItemHead`: 購入したアイテムのリストの開始（連結リストの先頭）を表す InvoiceItem<br>
`double amountDue(bool taxes)`: 請求書の支払総額を計算する。InvoiceItemHead から始まるすべてのリスト項目を反復処理し、数量も考慮して計算する必要があり、入力が true に設定されている場合は、合計金額に、消費税分の 10% を加算すること。<br>

## テストケース
`product1 = new Product ("shampoo", 10)`<br>
`product2 = new Product ("conditioner", 5)`<br>
`roduct3 = new Product ("tooth brush", 3)`<br>

`firstItem = new InvoiceItem(product1, 7)`<br>
`secondItem = new InvoiceItem(product2, 9)`<br>
`thirdItem = new InvoiceItem(product3, 10)`<br>

`firstItem.next = secondItem`<br>
`secondItem.next = thirdItem`<br>

`invoice = new Invoice ("UC1234567890", firstItem)`<br>
`invoice.amountDue(false) --> 145`<br>
`invoice.amountDue(true) --> 159.5`<br>

## 解き方
・クラスを作成し、個別にインスタンスを作成する<br>
・next プロパティを null で初期化し、連結することで次のアイテムにつなげる<br>
・新しい InvoiceItem オブジェクトを生成するときに、Product オブジェクトを引数にする。<br>
・currentList = currentList.nextとすることで、whileループ内でcurrentListを更新していく。<br>

## 感想
・オブジェクトの中にオブジェクト、その中にさらにオブジェクトの構造だが、それぞれにおいて何を意味しているのかをしっかり理解しながら実装することができた。<br>
・三項演算子を使った表現に慣れ始めてきたと実感した。<br>
