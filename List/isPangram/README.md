# 英文 string が与えられるので、a - z までの全ての文字を含んでいるか判定する、isPangram という関数を定義する問題

## 条件
a - z までの全てのアルファベットを含まなければいけない

## 関数の入出力例
入力のデータ型： `string string`<br>
出力のデータ型： `bool`<br>

## テストケース
`isPangram("we promptly judged antique ivory buckles for the next prize") --> true`<br>
`isPangram("We promptly judged Antique ivory buckles for the next prize") --> true`<br>
`isPangram("a quick brown fox jumps over the lazy dog") --> true`<br>
`isPangram("sphinx of black quartz judge my vow") --> true`<br>
`isPangram("the five boxing wizards jump quickly") --> true`<br>
`isPangram("sheep for a unique zebra when quick red vixens jump over the yacht") --> false`<br>
`isPangram("the Japanese yen for commerce is still well-known") --> false`<br>
`isPangram("dan took the deep dive down the rabbit hole") --> false`<br>

## 思考プロセス
・英文はすべて小文字に変換する<br>
→ ASCIIコードを使うと変換は必要ない<br>
・スペースをなくす<br>
・何度も同じアルファベットが出てくる可能性があるので、重複しない設計にする必要がある<br>

・アルファベット（小文字）のキャッシュを作成して、文字があるかどうかをチェックしていく<br>
→ `a`, `b`, `c`...とキャッシュに手作業で格納していくのは時間がかかるため、ループとASCIIコードを使用する<br>
→ 26個の要素を格納できる配列サイズを用意し、a - zのASCIIコードを順番に格納する<br>
→ ASCIIコードを格納していくことと、`true` or `false`を判断するロジックがつなげられない<br>
→ `a`ならインデックス0、`b`ならインデックス1...で管理するようにしたいが、それだと`true` or `false`に結びつかない<br>
→ 連想配列とを使えばいい<br>
→ ？一旦整理<br>
→ ASCIIコードを使う必要があるのか？<br>
→ キャッシュを使う必要性があるのか？: これはある<br>
→ 最終的に得たい結果は`true` or `false`<br>
→ `true` or `false`を判定するロジックを考えよう<br>

・キャッシュを用意する<br>
→ 文字がキャッシュにあるかどうか確認<br>
→ キャッシュにない場合: 保存<br>
→ キャッシュにある場合: スキップ<br>
→ 最終的にキャッシュの要素の個数が26個になればtrue、そうでなければfalseと判定する<br>

●タイムオーバーにつき他の方のコードを参照した<br>
→ アルファベットとインデックス番号を紐づけるために "ascii - 97" を使って、a-zと0-25を対応づけていた<br>
→ キャッシュにはあらかじめ26個分の数字0を格納しておき、a-zに該当するときは、1に更新する<br>
→ 0が一個もなければ真と判定<br>

## 考えられるエッジケース
・文字列が空<br>

## 悩んだ箇所
・キャッシュを使用する場合、最初にアルファベットの個数である26個分の`false`を格納し、アルファベットがあれば`true`に更新し、最後にキャッシュ内に`false`があるかどうかを調べる方法を実装しようとしたが、`true` or `false`とアルファベットの位置をどう結びつけるかが思いつかなかったこと<br>
・ASCIIコードを使う方法も考えたが、これをキャッシュとどう結びつけるかがすぐにはわからなかったこと<br>
・アルファベットとインデックスの対応づけ<br>

## 計算量
PHP<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：ループによる線形探索があるため<br>
・空間計算量：n回分配列に要素を追加するため<br>
(結果)時間計算量：O(n)　空間計算量：O(n)<br>
※厳密には時間計算量がO(n log log n)になるが、O(n)でも問題ないらしい。<br>

## 気づき
・完全に自力で実装することができず、途中までの実装となってしまった。その原因は、アルファベットとインデックスの対応づけを実装できなかったところにあった。この対応づけのために`a`がインデックス0になるように、ASCIIコードに変換した後、`a`の97を引くことでインデックス0から対応できるということ<br>

## 改善点
・自力での実装<br>
