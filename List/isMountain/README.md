# Bond はクラスの文化祭で行う劇で背景を制作することになり、現在は山を作っている。各地点での山の高さの一覧 height が与えられるので、山型になっているかどうか判断する isMountain という関数を定義する問題

## 山型の条件
・配列のサイズが 3 以上であること<br>
・高さは初めは上がり続け、一度下がったら下がり続けること（例：1,2,3,4,5,3,2,1）<br>


## 関数の入出力例
入力のデータ型： `integer[] height`<br>
出力のデータ型： `bool`<br>

## テストケース
`isMountain([1,2,3,2]) --> true`<br>
`isMountain([1,2]) --> false`<br>
`isMountain([2,1]) --> false`<br>
`isMountain([1,2,2,2,2]) --> false`<br>
`isMountain([1,2,3]) --> false`<br>
`isMountain([4,3,2,1]) --> false`<br>
`isMountain([1,2,2,2,3,2]) --> false`<br>
`isMountain([3,2,2,2,1,1]) --> false`<br>
`isMountain([10,20,30,400,500,10]) --> true`<br>
`isMountain([100,200,100,400,500,100]) --> false`<br>
`isMountain([100,200,300,200,100,300]) --> false`<br>
`isMountain([100,50,100,200,300,400]) --> false`<br>
`isMountain([53,158,477,994,994,867,797,755,744,621,616]) --> false`<br>

## 思考プロセス
・指定された条件から、はじめに配列の要素数をチェックし、3未満の場合はその場で処理を終了する<br>
・2つ目の条件とテストケースからわかったこと<br>
→ ①同じ数字が続くと`false`となる<br>
→ ②上がって下がって上がる、下がって上がるという挙動は`false`となる<br>
→ ②については、上がって下がるという挙動のみ`true`となる<br>
・ダメなパターンを条件式として列挙し、すべてクリアした時に`true`になるよう組み立てることができそう<br>
→ 山の頂点を求める → 頂点が下がり続けているかチェック → ゴール（最後のインデックス）に到達<br>


## 考えられるエッジケース
・配列の要素数が3未満<br>

## 悩んだ箇所
・過去に解いた時はAIのサポートを借りたが、今回はなかった<br>

## 計算量
PHP<br>
(予想)時間計算量：O(n)　空間計算量：O(1)<br>
・時間計算量：要素数分の走査があるため<br>
・空間計算量：追加のメモリ消費がないため<br>
(結果)時間計算量：O(n)　空間計算量：O(1)<br>


## 改善点
・型厳格性を意識したチェック(`===`の使用)<br>