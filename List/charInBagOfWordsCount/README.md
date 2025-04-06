# 単語のリスト bagOfWords とアルファベット keyCharacter が与えられるので、単語の中に特定のアルファベットが何回現れるかを返す、charInBagOfWordsCount という関数を定義する問題

## 関数の入出力例
入力のデータ型： `string[] bagOfWords`, `char keyCharacter`<br>
出力のデータ型： `integer`<br>

## テストケース
`charInBagOfWordsCount(["hello","world"],'o') --> 2`<br>
`charInBagOfWordsCount(["hello","world"],'p') --> 0`<br>
`charInBagOfWordsCount(["The","tech","giant","is in the","city center"],'p') --> 0`<br>
`charInBagOfWordsCount(["The","tech","giant","is in the","city center"],'e') --> 5`<br>

## 思考プロセス
・ループで各要素にアクセスし、その要素をさらに一つずつチェックしていく必要がある
→ 2重ループで、最初のループで要素にアクセス、内側のループで各文字にアクセスする
→ 内側のループで指定文字と合っていればカウントを増やしていく


## 計算量
JavaScript<br>
(予想)時間計算量：O(n^2) 空間計算量：O(1)<br>
(判断根拠)<br>
・時間計算量：2重ループの処理を行なうため<br><br>
・空間計算量：一度用意した変数内で値を更新し、追加のメモリ消費がないため<br>
(実際)時間計算量: O(n * m)・空間計算量: O(1)
・時間計算量におけるn は単語数、m は平均文字数を表す。O(n^2)はすべての単語の長さが同じ場合に該当するため、n * mと表現される。

<br>

<!-- PHP<br>
時間計算量：O(n)　空間計算量：O(1)<br>
・時間計算量／空間計算量の判断根拠はJavaScriptと同じ<br> -->

## 気づき
・2重ループ = O(n^2)と考えていたが、そうではないとわかった。文字列の場合、その長さも考慮する必要がある。

## 改善点
・時間計算量の削減（入力の配列が大きくなると、その分だけ処理が指数関数的に増えてしまうため）