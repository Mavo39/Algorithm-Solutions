# 生徒を表す Student クラスを以下のフィールド・メソッドに従って作成し、テストケースを出力する問題

## フィールド・メソッド
`String studentId` : 識別番号<br>
`String firstName` : 生徒の名<br>
`String lastName` : 生徒の姓<br>
`int gradeLevel` : 学年<br>
`String getStudentInfo()` : 生徒の情報を「識別番号：フルネーム(学年)」として返す<br>

## テストケース
`student1 = new Student("AC-343424", "James", "Smith", 6)`<br>
`student1.getStudentInfo() --> AC-343424: James Smith(6gr)`<br>

`student2 = new Student("AC-343428", "Maria", "Garcia", 5)`<br>
`student2.getStudentInfo() --> AC-343428: Maria Garcia(5gr)`<br>

`student3 = new Student("AC-343434", "Robert", "Johnson", 3)`<br>
`student3.getStudentInfo() --> AC-343434: Robert Johnson(3gr)`<br>

## 思考プロセス
・JavaScriptの場合、コンストラクタで引数を初期化し、メソッドを定義すればいい<br>
→ メソッドの先頭には静的メソッドではないので何もつけない<br>
<br>

## 感想
・簡単なクラスの実装だったため、特につまづく箇所はなかった。<br>
・文字列の連結ではなく、テンプレートリテラルを使って表現した。<br>

## 改善点
<br>