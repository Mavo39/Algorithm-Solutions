# 整数で構成される配列 nums が与えられた時、複数回出現する要素の中で、配列内でのインデックスが最も小さい要素を見つける firstRepeatingNumber という関数を定義する問題
ただし、配列内に重複する要素が存在しない場合は、-1 を返すこと

## 関数の入出力例
入力のデータ型： `integer[] nums`<br>
出力のデータ型： `integer`<br>

## テストケース
`firstRepeatingNumber([2,12,5,10,9,8]) --> -1`<br>
`firstRepeatingNumber([1,5,3,4,3,1,6]) --> 1`<br>
`firstRepeatingNumber([11,45,32,75,88,15,15]) --> 15`<br>

## 思考プロセス
・重複している（2回以上出現する）配列内の最も小さいインデックスに該当する要素を返す<br>
→ 各要素の出現回数をカウントする<br>
→ 出現回数が2以上のインデックスをループによって見つけ、その要素を取り出す<br>
→ キー: 要素、値: 出現回数としたハッシュマップを作成する<br>

## 考えられるエッジケース
・引数が空配列<br>

## 悩んだ箇所
・ゴールに到達するために必要な要素を分解すること<br>
→ 複数回出現する要素の中で、インデックスが最小の要素を返すことが目的<br>
→ ハッシュマップのキーを要素とするか、インデックスとするか<br>
→ はじめインデックスをキーとしていたが、これだと目的である「最初に出現する重複する数」を見つけることに結びつかないとわかった<br>
→ 値の重複とは関係ないため<br>
→ 要素をキーとしたハッシュマップを作成した<br>

## 気づき
他の方のコードから学んだこと<br>
・minIndexという変数を使い、<br>
→ 重複した要素がみつからないときの初期値として-1を設定したこと<br>
→ この値を管理することで最小のインデックスに該当する値を取り出すことができること<br>
・配列の後ろから走査することで、1回の処理で済ませることができること<br>
→ この際、minIndexを更新していく<br>
・minIndex更新とハッシュマップの作成を同時に行なうこと<br>
・最後にminIndexが-1かどうかで返す値を変えていること<br>

## 計算量
JavaScript<br>                                                                        
(予想)時間計算量：O(n+m)　空間計算量：O(n)<br>
・時間計算量：ハッシュマップ作成時のループ処理と重複する要素を見つけるためのループが行われるため<br>
・空間計算量：hashmap作成時に、ハッシュマップ配列に対して要素分の追加があるため<br>
(結果)時間計算量：O(n+m)　空間計算量：O(n)<br>

## 直面したエラーと解決策
・なかった

## 改善点
・可読性と管理のしやすさ<br>
・冗長な表現<br>
・時間計算量の削減（ループを減らすことによって可能）<br>