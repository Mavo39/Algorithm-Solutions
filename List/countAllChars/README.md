# 文字列によって構成される配列 arr を使い、配列内に存在する全ての文字数をカウントする、countAllChars という関数を作成する問題

## 関数の入出力例
入力のデータ型： `string[] arr`<br>
出力のデータ型： `integer`<br>

## テストケース
`countAllChars(["The wood","Pecked peckers","At the inn","Tomorrowland"]) --> 44`<br>
`countAllChars(["He","fumbled","in","the,darkness","looking","for","the","light","switch"]) --> 47`<br>
`countAllChars(["I","am","never","at","home","on","Sundays"]) --> 23`<br>

## 解き方
・配列の要素を一つずつ走査し、要素ごとに文字数をカウントしていき、合計を管理する変数に加えていく<br>

## 感想
・特に引っかかる箇所はなかった。<br>

## 工夫した点 
・前問の反省を活かし、エッジケースである配列が空だった場合を最初に記述したこと。<br>
