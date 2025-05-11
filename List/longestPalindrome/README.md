# 文字列 string が与えられるので、最長の回文の長さを返す、longestPalindromeLength という関数を定義する問題

## 関数の入出力例
入力のデータ型： `string string`<br>
出力のデータ型： `integer`<br>

## テストケース
`longestPalindromeLength("abcccdd") --> 5`<br>
`longestPalindromeLength("kayak") --> 5`<br>
`longestPalindromeLength("abcdefa") --> 3`<br>
`longestPalindromeLength("abcdabct") --> 7`<br>
`longestPalindromeLength("abcdefg") --> 1`<br>
`longestPalindromeLength("hello") --> 3`<br>
`longestPalindromeLength("forkayakkayakfor") --> 16`<br>
`longestPalindromeLength("nursesrunatthehole") --> 15`<br>
`longestPalindromeLength("sitnumquametaspernatur.") --> 17`<br>
`longestPalindromeLength("harumautdoloresetaperiamrationeestvoluptatesexercitationem.") --> 47`<br>
`longestPalindromeLength("quidebitisaspernaturvelfugautexpeditaassumenda.") --> 37`<br>
`longestPalindromeLength("omnisetidest.") --> 9`<br>

## 思考プロセス
・回文の性質を紐解く<br>
→ 真ん中を軸にして左右対称になっていること<br>
→ 仮にハッシュマップを作ったとして、これを求めようとしているものとどうつなげればいいんだ？<br>


## 考えられるエッジケース
・文字列が空の場合<br>

## 悩んだ箇所
・ハッシュマップをどう適用すればいいのか<br>
・出力結果が期待されている出力結果と違っていた原因が特定できなかったこと<br>

## 苦戦した原因
・問題文の解釈が違っていた<br>
→（自分の考え）string で与えられた文字がハッシュマップを使って回文の範囲を求めるものだと考えていた<br>
→（実際）string の中にある文字を単体で見て組み合わせたときに回文になる最長の長さを求めることが求められているということ<br>

## 計算量
JS<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：ループ処理があるため<br>
・空間計算量：配列に対して要素分の追加があるため<br>
(結果)時間計算量：O(n)　空間計算量：O(n)<br>

## 直面したエラーと解決策
・for(let i = 0; i < keys.length; i++){<br>
                            ^<br>
TypeError: Cannot read properties of undefined (reading 'length')<br>
→ オブジェクトのキーを取り出す方法を間違っていた<br>
→（前）let keys = Object.hashmap;<br>
→（後）let keys = Object.keys(hashmap);<br>

・出力結果が0か1しかない<br>
→ countが更新されていない<br>
→（前）if(keys[i] % 2 === 0) count += 2;<br>
→（後）if(hashmap[keys[i]] % 2 === 0) count += 2;<br>

## 気づき
・全く検討がつかず、ヒントを見たところ、自分が問題文の意図と違う解釈をしていると気づいた<br>
→ それを踏まえてもう一度チャレンジ<br>

・今回は自力で解ききれず、やむなく時間切れと判断した<br>
→ 時間をかけすぎないよう、時間配分を決めておくと決めた<br>

・自作のコードがうまくいかなかった原因は、完成したハッシュマップが奇数の場合にはたとえペアを複数回作ることができる状態でもカウントされないこと<br>
→ ハッシュマップの値が5の場合、countに4を加えることができるが、それができていなかった<br>
→ ハッシュマップの値が奇数でも割り切れた分を加えるか、偶数のタイミングで count を増やしていくかする必要があった<br>

## 改善点
・自力での実装<br>
・for文の削減<br>