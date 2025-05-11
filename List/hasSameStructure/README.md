# ユーザーのボタン入力 inputChar、画面上に表示される単語一覧 wordList が与えられるので、2つが同じパターンかどうか判定する hasSameStructure という関数を定義する問題
ただし、空白は同じ文字としてカウントしないものとする<br>

## 例
abcabc, soccer baseball tennis soccer baseball tennis<br>
-> inputChar の文字の並び方と wordList の文字の並び方が対応しているため true を返す<br>

## 関数の入出力例
入力のデータ型： `string inputChar, string wordList`<br>
出力のデータ型： `bool`<br>

## テストケース
`hasSameStructure("abc","hello world") --> false`<br>
`hasSameStructure("tut","hot mild cold") --> false`<br>
`hasSameStructure("tut","hot mild mild") --> false`<br>
`hasSameStructure("aabac","word word dictionary word word") --> false`<br>
`hasSameStructure("aabac","word word dictionary word string") --> true`<br>
`hasSameStructure("abcabc","soccer baseball tennis soccer baseball tennis") --> true`<br>
`hasSameStructure("zabccabcz","book comic phone music music comic phone music book") --> true`<br>
`hasSameStructure("zzz","math math math") --> true`<br>

## 思考プロセス
・ここでいうパターンとは、1文字とワードがセットになっていること<br>
→ inputCharの各文字をキーとして、値は wordList の1つの単語としたハッシュマップを作成する<br>
→ （課題）wordListからどうやってwordを取り出すか<br>
→ explode関数を使って、純粋な文字列の配列をつくる<br>


## 考えられるエッジケース
・文字列が空の場合<br>

## 悩んだ箇所
・ループ内の条件をどう作るか<br>
→ キーが存在して値が存在しない場合・キーが存在しなくて値が存在する場合が false になるという条件をつくれば解決できそう<br>
→ 解決できた<br>

## 計算量
PHP<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：explodeとループ処理による全探索が2回あるが、定数は無視されるため<br>
・空間計算量：newWordList作成時に要素の追加があるため<br>
(結果)時間計算量：O(n^2)　空間計算量：O(n)<br>
・in_array()によって最悪のケースで発生する可能性がある

## 直面したエラーと解決策
・4つ目のテストケースの出力結果が true になる<br>
→ `{a: word, c: word}`となってしまい、同じワードが使用されていることが原因<br>
→ キーが違うだけで同じ値は存在しないようにする<br>

## 気づき
・ハッシュマップを作ることと検証を同時に行なうこと<br>
→ 1つのループでできることをまとめている<br>
→ この場合、ハッシュマップを作ることをループ内で最優先する必要はない<br>
・in_arrayの計算量を考慮していなった

## 改善点
・時間計算量の削減<br>