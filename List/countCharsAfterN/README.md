# 小文字の配列 arr の中で、n を含む以降の文字（n, o, p, q, r など）の数をカウントする countCharactersAfterN 関数を作成する問題

## 関数の入出力例
入力のデータ型： `string[] arr`<br>
出力のデータ型： `integer`<br>

## テストケース
`countCharactersAfterN(["the wood","pecked peckers","at the inn","tomorrowland"]) --> 20`<br>
`countCharactersAfterN(["he","fumbled","in","the","darkness","looking","for","the","light","switch"]) --> 17`<br>
`countCharactersAfterN(["he","is","never","at","home","on","weekends"]) --> 11`<br>

## 解き方
・文字列内をカウンタを使って走査していく。<br>
・文字をメソッドを使用して、ASCIIコードに変換する。<br>
・n をASCIIコードで表現すると、110となることから、加える条件を110(n) ~ 122(z)とする。<br>

## 感想
・文字コードを使った解き方に慣れていきたいと感じた。<br>

## 工夫した点 
・ASCIIコードに変換する関数を別に設けることで、関数の役割を分離し、一つの関数に一つの処理を実現するようにした。<br>

・110 ~ 122 とせずに、`>= 110`という条件を設定することで記述量を減らしたこと。<br>
・直接2重ループの構造にならないよう、文字列内のn以降の数をカウントする関数と、配列内の要素のn以降の数をカウントする関数を分けて実装したこと。ただし、この方法は関数呼び出しに伴うオーバーヘッドが生じる可能性を考慮する必要がある。<br>
