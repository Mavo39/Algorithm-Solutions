# ユーザー1 の属性 user1、ユーザー2 の属性 user2 が与えられるので、この 2 つが同じパターンをしているかどうか判定する、hasSameType という関数を定義する問題


## 関数の入出力例
入力のデータ型： `string user1, string user2`<br>
出力のデータ型： `bool`<br>


## テストケース
`hasSameType("aabb","yyza") --> false`<br>
`hasSameType("aappl","bbtte") --> true`<br>
`hasSameType("aappl","bbttb") --> false`  <br>
`hasSameType("aabb","abab") --> false`<br>
`hasSameType("aappl","bktte") --> false`<br>
`hasSameType("aaapppl","bbbttke") --> false`<br>
`hasSameType("abcd","tso") --> false`<br>
`hasSameType("abcd","jklm") --> true`<br>
`hasSameType("aaabbccdddaa","jjjddkkpppjj") --> true`<br>
`hasSameType("aaabbccdddaa","jjjddkkpppjd") --> false`<br>


## 思考プロセス
ゴール: ユーザーの属性 `string` が同じパターンかどうかを判定する<br>
 → 同じパターンとは「この文字(user1) = この文字(user2)」といった、アルファベットのペアが決まっている状態のことと判断<br>
必要な要素: ①文字列の長さが同じ ②ハッシュマップの作成と検証<br>

①文字列の長さが同じ<br>
アルファベットのペアが成立しなくなるため、長さの検証が必要<br>

②ハッシュマップの作成と検証<br>
ハッシュマップ作成のループ処理において検証ができる<br>
→ すでにアルファベットが存在する場合で、キーと値のペアが等しくない場合は成立しない<br>
→ 最後までハッシュマップが作成できればマッチ<br>


## 考えられるエッジケース
・いずれかの文字列が空<br>


## 悩んだ箇所
・3つ目のテストケースが<br>


## 計算量
PHP<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：ハッシュマップ作成時のループ処理とキー配列のループ処理による全探索が2回あるが、定数は無視されるため<br>
・空間計算量：ハッシュマップ作成時に追加のメモリ消費があるため<br>
(結果)時間計算量：O(n)　空間計算量：O(n)<br>


## 直面したエラーと解決策
・PHP Warning: Undefined array key "a" in ~ Algorithm-Solutions/List/hasSameType/php/solution.php on line 9<br>
(原因)ハッシュマップに値がまだ存在しない場合にis_null()の使用していたこと
→ is_null() は変数が NULL かどうかをチェックする関数。存在しない配列のキーにアクセスした場合、PHPは NULL を返すのではなく、未定義のキーであることを示す警告を出しつつ、そのキーに対応する値がないことを示すため、警告が発生する。
(前) is_null()の使用
(後) isset()の使用

・テストケース3つ目の出力結果が異なる<br>
→ 原因が解明できず、タイムオーバー（続きは翌日）


## 気づき
<br>


## 改善点・フィードバック
・<br>
