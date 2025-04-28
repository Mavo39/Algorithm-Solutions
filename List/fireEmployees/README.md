# 従業員のリスト employees と来月解雇されるリスト unemployed が与えられるので、来月残留する従業員の配列を返す fireEmployees という関数を定義する問題

## 関数の入出力例
入力のデータ型： `string[] employees, string[] unemployed`<br>
出力のデータ型： `string[]`<br>

## テストケース
`fireEmployees(["Steve","David","Mike","Donald","Lake","Julian"],["Donald","Lake"]) --> [Steve,David,Mike,Julian]`<br>
`fireEmployees(["Donald","Lake"],["Donald","Lake"]) --> []`<br>
`fireEmployees(["Steve","David","Mike","Donald","Lake","Julian"],[]) --> [Steve,David,Mike,Donald,Lake,Julian]`<br>
`fireEmployees(["Mike","Steve","David","Mike","Donald","Lake","Julian"],["Mike"]) --> [Steve,David,Donald,Lake,Julian]`<br>
`fireEmployees(["Kailey","Kailey"],["Kailey"]) --> []`<br>

## 思考プロセス
・解雇対象者のリストを連想配列に格納し、従業員リストをループで操作しながら連想配列をチェックする<br>
→ 連想配列に名前がない場合に空配列に名前を格納する<br>

## 考えられるエッジケース
・employeesが空の場合<br>
・unemployedが空の場合<br>

## 悩んだ箇所
・特になかった。<br>

## 計算量
JS<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：ループによる線形探索が2回あるが、定数は無視されるため<br>
・空間計算量：n回分配列に要素を追加するため<br>
(結果)時間計算量：O(n+m)　空間計算量：O(n+m)<br>
厳密にはこのようになるが、予想の計算量でも問題はないもよう。


## 気づき
・他の方のコードからわかったこと<br>
→ cache をオブジェクト {} にすると、型に関係なくキー管理できること<br>
→ 配列 [] を連想配列的に使えるが、オブジェクト {} の方が推奨されていること<br>
→ ハッシュマップを使った実装<br>

## 改善点
・ハッシュマップを使用した実装<br>
