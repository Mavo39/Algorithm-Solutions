# 整数で構成される配列 arr が与えられるので、配列の各要素を 2 倍にして返す doubledArray という関数を分割統治法を用いて実装する問題


## 関数の入出力例
入力のデータ型： `integer[] arr`<br>
出力のデータ型： `integer[]`<br>


## テストケース
`doubledArray([1,2,3,4,5]) --> [2,4,6,8,10]`<br>
`doubledArray([5,4,3,2,1]) --> [10,8,6,4,2]`<br>
`doubledArray([1,1,2,2,3,3]) --> [2,2,4,4,6,6]`<br>


## 思考プロセス
ゴール: 分割統治法を用いて現在の配列の要素をそれぞれ2倍にする<br>
必要な要素: ①分割統治法が使えそうか予測 ②分割 ③制覇 ④統合<br>

①分割統治法が使えそうか予測<br>
この問題は配列の要素を半分に分割していき、<br>
要素が一つになったときに要素を2倍にして呼び出し元に返していき、<br>
その処理結果を統合していくことで求められることが実装できそうであるため、<br>
分割統治法が適用できると判断<br>

② 分割<br>
配列を半分に分ける操作を配列の要素が1つになるまで行なう<br>
→ 結果を呼び出し元に戻す必要があるため、再帰を使用する<br>
・start と end のインデックスを使って範囲を指定<br>
・真ん中 mid = (start + end) / 2 を基準に左右に分ける<br>
・配列を半分に分ける操作を配列の要素が1つになるまで行なう<br>

③ 制覇<br>
小さくなった問題、要素1個を直接解く<br>
・ベースケース: start と endインデックスが同じとき、その要素を2倍にして返す<br>

④ 統合<br>
小さな答えである2倍にした要素を返し、全体の答えにする<br>
・再帰ケース: 小さな問題を呼び出し元に返す<br>


## 考えられるエッジケース
・引数が空配列<br>


## 悩んだ箇所
・分解して2倍にした要素を呼び出し元に返した後の結合方法<br>


## 計算量
PHP<br>                                                                        
(予想)時間計算量：O(n)　空間計算量：O(n)<br>
・時間計算量：全要素を対象に処理し、全要素数に匹敵する処理を行なうため<br>
・空間計算量：ベースケースに到達する度、および配列を連結するたびメモリを消費するため<br>
(結果)時間計算量：O(n)　空間計算量：O(n)<br>
・ワンポイントアドバイス: 元の配列を破壊的に変更しない設計（イミュータブルな処理）にしているため、どうしても新たな配列を作成する必要がある。そのため、副作用を避ける代償として空間計算量がO(n) になっている、という見方もできる<br>

## 直面したエラーと解決策
エラー①
```
PHP Fatal error:  Allowed memory size of 134217728 bytes exhausted (tried to allocate 262144 bytes) in /Users ~ /doubledArray/php/solution.php on line 12
```
(意味)PHPに許可されている最大メモリ量である約128MBを超えており、さらに256KB（=262,144バイト）を確保しようとしたが、限界を超えていたため失敗した<br>
(原因)再帰が深く、再帰の中で配列やオブジェクトを生成し続けていることにより、メモリを大量消費していること<br>
(改善前)
```php: 要素をマージ
    $mid = floor(($start + $end) / 2);
    $leftArr = doubledArrayHelper($arr, $start, $mid+1);
    $rightArr = doubledArrayHelper($arr, $mid+1, $end);

    return array_merge($leftArr, $rightArr);
```
(改善後)
```php: 要素をそのまま返す
    doubledArrayHelper($arr, $start, $mid+1);
    doubledArrayHelper($arr, $mid+1, $end);

    return $arr;
```

エラー②<br>
```
Fatal error: Uncaught TypeError: doubledArrayHelper(): Return value must be of type array, int returned in ~ List/doubledArray/php/solution.php:9
Stack trace:
#0 ~/List/doubledArray/php/solution.php(12): doubledArrayHelper(Array, 0, 0)
#1 ~/List/doubledArray/php/solution.php(12): doubledArrayHelper(Array, 0, 1)
#2 ~/List/doubledArray/php/solution.php(12): doubledArrayHelper(Array, 0, 2)
#3 ~/List/doubledArray/php/solution.php(5): doubledArrayHelper(Array, 0, 4)
#4 ~/List/doubledArray/php/test.php(5): doubledArray(Array)
#5 {main}
  thrown in ~/List/doubledArray/php/solution.php on line 9
```
(意味)<br>
・スタックトレースを表している<br>
・下から上に辿ることで呼び出しの流れを知ることができる<br>
・`#0`が最後に実行された関数の位置を表す<br>
(原因)
・ベースケースの設定が正しくないこと<br>
・return の戻り値が配列を期待しているのに、int 型のデータを返してしまっている
(改善前)
```php
if($start === $end) return $arr[$start * 2];
```
(改善後)
```php
    if($start === $end){
        $arr[$start] *= 2;
        return $arr;
    }
```
(修正点1)配列を返す<br>
(修正点2)インデックスを2倍ではなく、要素を2倍にする<br>

エラー③: 出力結果が2倍になっていない<br>
(原因)
・再帰処理の結果を処理できていない<br>
→ 戻ってきた配列を使っていない<br>
(改善前)
```php
    // 1つの要素だけを2倍にした配列
    if($start === $end){
        $arr[$start] *= 2;
        return $arr;
    }
    
    $mid = floor(($start + $end) / 2);
    // ベースケースで帰ってきた後に処理がされておらず、配列の変更が反映されていない
    doubledArrayHelper($arr, $start, $mid);
    doubledArrayHelper($arr, $mid+1, $end);

    return $arr;
```
(改善後)
```php
    // 1つの要素を2倍にして、その要素だけの配列として返す
    if($start === $end) return [$arr[$start] *= 2];
    
    $mid = floor(($start + $end) / 2);
    $leftArr = doubledArrayHelper($arr, $start, $mid);
    $rightArr = doubledArrayHelper($arr, $mid+1, $end);
    // 左右の配列をマージ
    return array_merge($leftArr, $rightArr);
```
<br>


## 気づき・学び
・関数の役割の明確化を意識したことにより、なぜその関数が必要かを考えたこと<br>
→ 今回はバリデーション用と実行用に関数を分けた<br>
・PHPで許可されているメモリ量（memory_limit）は、php.ini ファイルで管理されていること<br>
・php.ini ファイルはPHPの設定ファイルで、PHP動作全体を制御する<br>
・メモリ上限の超過とスタックオーバーフローは異なる概念であること<br>
・メモリの超過はデータを扱うヒープ領域で起こり、大量のデータを扱う処理が原因になる<br>
・毎回の呼び出しで配列を結合したり、オブジェクトを作成したりしていると、それらはヒープ領域に確保される。再帰が深くなればなるほど、それらの生成された配列・オブジェクトの数が増え、解放されない限りヒープメモリを圧迫してしまう。<br>
・{main} は、PHP スクリプトの最初に実行が始まった場所（グローバルスコープ）を意味すること<br>
・PHP の配列は 値渡しが基本だが、コピー・オン・ライト（copy-on-write）という最適化が働いていて、配列が関数に渡された直後はコピーは発生せず、その配列が変更された瞬間にコピーが作られるという動作になる<br>
・1行で2つ以上のことを同時に行なうと、意図がわかりにくくなるということ<br>
・それぞれの行が1つの目的を明確に持っていると、将来的に保守・レビュー・テストが圧倒的に楽になること<br>

## 改善点・フィードバック
・配列の要素を2倍にしたときの副作用の意図がわかりづらいこと<br>
```php: 自分のコード
// 副作用があるように見えてしまう
// 実際には内部的にコピーされた配列を変更しているだけで、元の配列$arrに影響はない
if($start === $end) return [$arr[$start] *= 2];
```
```php: 意図を明確にしたコード
if ($start === $end) {
    // 別の変数を使うことで、「元の配列 $arr 自体には何の変更もしていない」ことが明確になる
    $doubled = $arr[$start] * 2; // 値の計算
    return [$doubled];           // 返り値
}
```
・floor関数の使用する場合、正確に整数を使用するためにキャストが必要<br>
PHPのfloor関数は浮動小数点数を返すため、整数にキャストする必要がある。int型にキャストするか、intdiv関数を使用することで、より明確に整数を扱うことができる。intdiv()の使用も可能。<br>
```php: 自分のコード
$mid = floor(($start + $end) / 2);
```
```php: intdivを使用したコード(キャスト不要)
$mid = intdiv($start + $end, 2);
```