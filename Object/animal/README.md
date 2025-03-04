# Animal クラスを作成する問題

## プロパティ
`String name`: 動物の名前<br>
`double weightKg`: 動物の体重<br>
`double heightM`: 動物の身長<br>
`boolean isPredator`: 捕食者かどうか<br>
`double speedKph`: 動物の時速<br>
`double activityMultiplier`: どれほど動物が活発的か表す数字。動物園の動物は檻に入れられているので活動が制限されているとみなし、活動指数を 1.2 とする。<br>

## メソッド
`double getBmi()`: 動物の BMI を返す。kg / (heightM2) を使うこと。小数点第 3 位以下は切り捨て。<br>
`double getDailyCalories()`: 動物が毎日どれほどのカロリーを消費する必要があるか返す。計算式は (70 × weightKg0.75) × activityMultiplier で求めることができる。小数点第 3 位以下は切り捨て。<br>
`boolean isDangerous()`: 動物が危険かどうか判断するブール値を返す。動物が捕食者だった場合、危険とみなされ、身長が 1.7 メートル以上、もしくは時速 35km/h 以上の場合も危険とみなされる。<br>

## テストケース
`rabbit = new Animal("rabbit", 10, 0.3, false, 20)`<br>
`rabbit.getBmi() --> 111.11`<br>
`rabbit.isDangerous() --> false`<br>

`snake = new Animal("snake", 30, 1, true, 30)`<br>
`snake.isDangerous() --> true`<br>
`snake.getDailyCalories() --> 1076.76`<br>

`elephant = new Animal("elephant", 300, 3, false, 5)`<br>
`elephant.getBmi() --> 33.33`<br>
`elephant.getDailyCalories() --> 6055.08`<br>

`gazelle = new Animal("gazelle", 50, 1.5, false, 100)`<br>
`gazelle.getDailyCalories() --> 1579.45`<br>
`gazelle.isDangerous() --> true`<br>

## 解き方
・クラスを作成し、個別にインスタンスを作成する<br>

## 気づき
・小数点第三位を求めるために、最初に100をかけ、100で割ることで求めることができるとわかった。<br>
