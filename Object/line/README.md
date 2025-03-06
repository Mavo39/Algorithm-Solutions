# Line クラスには、2 つの Point オブジェクトを引数として受け取るコンストラクタがあり、Line オブジェクトの始点および終点に代入される。以下に従って、Line クラスを作成し、テストケースを出力する問題。

## データ
`Point startPoint: 線の始点`<br>
`Point endPoint: 線の終点`<br>
`double getLength(): 線の長さを返す`<br>

## テストケース
`a = new Point(3,1)`<br>
`b = new Point(3,6)`<br>
`lineAB = new Line(a, b)`<br>
`lineAB.getLength() --> 5`<br>

`c = new Point(1,3)`<br>
`d = new Point(6,15)`<br>
`lineCD = new Line(c, d)`<br>
`lineCD.getLength() --> 13`<br>

## 解き方
・クラスを作成し、個別にインスタンスを作成する<br>

## 試したこと
・クラスのエクスポートを調べて使ったこと<br>