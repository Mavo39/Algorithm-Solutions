# 会員のメールアドレスリスト emailList が与えられるので、正しく利用できるメールアドレスだけを配列として返す validEmailList という関数を定義する問題

## 正しいメールの条件
・スペースがないこと<br>
・「@」を 1 つのみ含んでいること<br>
・「@」の後に「.」があること<br>
・「@」から始まらないこと<br>


## 関数の入出力例
入力のデータ型： `string[] emailList`<br>
出力のデータ型： `string[]`<br>

## テストケース
`validEmailList(["ccc@aaa.com","c@cc@aaa.com","cc c@aaa.com","cc.c@aaa.com"]) --> [ccc@aaa.com,cc.c@aaa.com]`
`validEmailList(["c@cc@aaa.com","cc c@aaa.com","cc.c@aaacom"]) --> []`
`validEmailList(["ccc@aaa.com","cvsd@a.com","tele@bb.aa","cc.c@aaa.com"]) --> [ccc@aaa.com,cvsd@a.com,tele@bb.aa,cc.c@aaa.com]`
`validEmailList(["c@cc@aaa.com","tele@bb.aa","cc.c@aaa.com","ccc@aaa.com"]) --> [tele@bb.aa,cc.c@aaa.com,ccc@aaa.com]`<br>

## 思考プロセス
①「Emailが有効かどうかを確認する関数」と「Emailリスト内で有効なEmailをリストに格納してリストを返す関数」を作成する方法<br>
→ 後者はforループで要素を一つ一つ確認していく。<br>
→ 全社において、以前どこかで見た、各条件を一度変数に格納し、最後にその変数を条件式に使用することで1行あたりのコードを長くしない<br>
<br>
②正規表現を使って表現する<br>
→ 今回は正規表現を使って文字列を表現してみよう<br>
→ 正規表現はどう使うんだ？<br>
→ どうやって引数を検証するんだ？<br>
→ 一度正規表現を変数に格納し、その変数.test(検証したい引数)で、検証する<br>


## 計算量
JavaScript<br>
(予想)時間計算量：O(n+m) 空間計算量：O(n)<br>
(判断根拠)<br>
・時間計算量：validEmailによって配列内の要素の文字列の長さ分検証を行ない(O(n))、さらに配列の要素数分のループ処理を行なうため<br>
・空間計算量：新たに配列に要素を加えていくことで、要素数分の追加メモリの消費が必要になるため<br>
(実際)時間計算量: O(n*m)・空間計算量: O(n)<br>
・時間計算量：配列の要素数(n)と各Email文字列の平均長(m)の組み合わせで決まるため<br>
<br>
※以下、DeepSeek解説からの気づき<br>
>一般的な正規表現エンジン（JavaScript含む）では、test() メソッドの計算量は 文字列長 m に対して O(m) です。<br>
>ただし、バックトラックが発生する複雑なパターン（例: (a+)+b）の場合は 指数時間 O(2^m) になる可能性があります。<br>

## 気づき
・`+`は前の条件に加えて、という意味ではなく、直前の文字を1回以上含むということ<br>
・正規表現の計算量について<br>
・正規表現は一つ一つ条件ごとにロジックを記述するよりもコードがスッキリしていること<br>

## 改善点
・他の方法によるアルゴリズムの実装<br>