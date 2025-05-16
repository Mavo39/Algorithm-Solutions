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
※ 「最後までハッシュマップが作成できればマッチ」は条件が甘かった


## 考えられるエッジケース
・いずれかの文字列が空<br>


## 悩んだ箇所
・3つ目のテストケースが期待される出力と異なる原因の特定<br>
（原因）すでにハッシュマップに存在する値を別のアルファベットのペアとして使用していること<br>
→ a => b は成立しているが、l => b はすでに b が a のペアとして使用されているため適さない<br>


## 計算量
PHP<br>                                                                        
(予想)時間計算量：O(n^2)　空間計算量：O(n)<br>
・時間計算量：ループ処理中に全探索を行なうin_array()があるため<br>
・空間計算量：ハッシュマップ作成に伴う追加のメモリ消費があるため<br>
(結果)時間計算量：O(n^2)　空間計算量：O(n)<br>


## 直面したエラーと解決策
・PHP Warning: Undefined array key "a" in ~ Algorithm-Solutions/List/hasSameType/php/solution.php on line 9<br>
(原因)ハッシュマップに値がまだ存在しない場合にis_null()の使用していたこと<br>
→ is_null() は変数が NULL かどうかをチェックする関数。存在しない配列のキーにアクセスした場合、PHPは NULL を返すのではなく、未定義のキーであることを示す警告を出しつつ、そのキーに対応する値がないことを示すため、警告が発生する。<br>
(前) is_null()の使用<br>
(後) isset()の使用<br>

・テストケース3つ目の出力結果が異なる<br>
(考えられる原因)すでにハッシュマップに存在する値を別のアルファベットのペアとして使用していることが原因である可能性が高い<br>
→ a => b は成立しているが、l => b はすでに b が a のペアとして使用されているため適さない<br>
→ すでに値が存在するときを `false` に判定していない<br>
→ 従来のコードでは、$user1の'l'を検証するときに、いずれの if 文にも該当せず、処理が終了してしまう<br>
→ 該当するようにするためには、既に値が存在する場合には `false` を返すように設定する必要がある<br>
(前)<br>
    for($i = 0; $i < strlen($user1); $i++){<br>
        if(!isset($hashmap[$user1[$i]]) && !in_array($user2[$i], array_values($hashmap))){<br>
            $hashmap[$user1[$i]] = $user2[$i];<br>
        }<br>
        else if(isset($hashmap[$user1[$i]]) && $hashmap[$user1[$i]] !== $user2[$i]){<br>
            return false;<br>
        }<br>
    }<br>
(後)<br>
    for($i = 0; $i < strlen($user1); $i++){<br>
        if(!isset($hashmap[$user1[$i]])){<br>
            if(in_array($user2[$i], array_values($hashmap))){<br>
                return false;<br>
            }<br>
            $hashmap[$user1[$i]] = $user2[$i];<br>
        }<br>
        else if(isset($hashmap[$user1[$i]]) && $hashmap[$user1[$i]] !== $user2[$i]){<br>
            return false;<br>
        }<br>
    }<br>

## 気づき
・「既に値が存在するとき」を`false`に判定していないのが期待通りに出力しない原因だと自力で気づくことができたこと<br>
→ `false` を返すように設定すればいいと考えた<br>
（他の方のコードから）<br>
・resという変数を用意しておき、ハッシュマップの作成とハッシュマップに値が存在するときはres変数に文字を格納する操作を同時に行ない、最終的にresとuser2を比較して同じかどうかを判定する<br>

## 改善点・フィードバック
・strlen()を何度も呼び出さず、変数に格納し再利用すること<br>
→ コードの可読性とパフォーマンスを向上させることができる<br>
・時間計算量の削減<br>
