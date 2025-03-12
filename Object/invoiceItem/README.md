# InvoiceItem クラスを作成し、テストケースを出力する問題

## データ
`Product product`: 製品オブジェクト<br>
`int quantity`: 購入する製品の数<br>
`InvoiceItem next`: 請求書の次の項目<br>
`double getTotalPrice()`: 購入する数量に基づいて、製品の合計価格を計算します<br>

## テストケース
`product1 = new Product ("shampoo", 10)`<br>
`product2 = new Product ("conditioner", 5)`<br>
`product3 = new Product ("tooth brush", 3)`<br>

`firstItem = new InvoiceItem(product1, 7)`<br>
`secondItem = new InvoiceItem(product2, 9)`<br>
`thirdItem = new InvoiceItem(product3, 10)`<br>

`firstItem.next = secondItem`<br>
`secondItem.next = thirdItem`<br>

`firstItem.getTotalPrice() --> 70`<br>
`secondItem.getTotalPrice() --> 45`<br>

`firstItem.next.getTotalPrice() --> 45`<br>
`firstItem.next.next.getTotalPrice() --> 30`<br>
`firstItem.next.product.price --> 5`<br>
`firstItem.next.next.product.title --> tooth brush`<br>

## 解き方
・クラスを作成し、個別にインスタンスを作成する<br>
・next プロパティを null で初期化し、連結することで次のアイテムにつなげる<br>
・新しい InvoiceItem オブジェクトを生成するときに、Product オブジェクトを引数にする。<br>
こうすることで、InvoiceItem オブジェクトがProduct オブジェクトを含んでいる状態にできる。<br>

## 感想
・連結リストの一断片を実装できた。<br>
・オブジェクトがオブジェクトを含むことで表現の幅が広がると実感した。<br>