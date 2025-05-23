# 整数 x と整数によって構成される配列 arr1 と arr2 が与えられるので、2 つの配列からそれぞれ 1 個ずつ整数を選んで足した合計値として、x 未満の範囲内での最大値を文字列として返す maxOfPairSum という関数を定義する問題
ただし、そのような値がない場合は、`no pair` と返すこと<br>

## 関数の入出力例
入力のデータ型： `integer[] arr1, integer[] arr2, integer x`<br>
出力のデータ型： `string`<br>

## テストケース
`maxOfPairSum([2,8,7],[1,5,6],10) --> 9`<br>
`maxOfPairSum([12,8,20],[11,9,22],30) --> 29`<br>
`maxOfPairSum([-4,-2,-5],[-1,-6,-8],-3) --> -5`<br>
`maxOfPairSum([583,114,925,669,402,7,84,747],[655,797,905,843,652,841,893],260) --> no pair`<br>

## 思考プロセス
・両方の配列を1つずつ走査する必要があるため、2重ループは避けられなさそう<br>
・両方の配列の最初の要素の合計を最大値として設定しておき、この値をチェックしながら更新していく<br>
・更新条件: ①x未満であること　②現在の最大値より大きいこと<br>


## 考えられるエッジケース
・両方の配列が空のケース<br>

## 悩んだ箇所
・1つ目のテストケースの出力結果が予想と異なったこと<br>
→ ループの開始位置が違っていたことが原因<br>

## 計算量
JS<br>
(予想)時間計算量：O(n*m)　空間計算量：O(1)<br>
・時間計算量：各配列の要素数分の走査がそれぞれあるため<br>
・空間計算量：追加のメモリ消費がないため<br>
(結果)時間計算量：O(n*m)　空間計算量：O(1)<br>


## 改善点
・Infinityの活用<br>
・時間計算量の削減<br>
・全てのペアの合計が 0 未満だった場合に正しく動作しない可能性があること<br>