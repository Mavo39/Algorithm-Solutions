# ① 生徒を表す Student クラスを、教室を表す Classroom クラスを作成し、テストケースを出力する問題
※Studentクラスを使用する<br>

# ② 上記を拡張して、生徒の配列が状態の一部として含まれている Classroom クラスのリストである学校を作成し、成績優秀者のみを出力する printHonorStudents という関数を作成し、テストケースを出力する問題
・成績優秀者は gradeLevel の値が 10 以上の場合<br>
・出力は、「識別番号：フルネーム(学年) from 教員's class」として返すこと<br>

## フィールド・メソッド
**Studentクラス**<br>
`String studentId` : 識別番号<br>
`String firstName` : 生徒の名<br>
`String lastName` : 生徒の姓<br>
`int gradeLevel` : 学年<br>
`String getStudentInfo()` : 生徒の情報を「識別番号：フルネーム(学年)」として返す<br>

**Classroomクラス**<br>
`Student[] students`: 生徒オブジェクトを格納した固定配列<br>
`String courseName`: 科目名<br>
`String teacher`: 教員名<br>
`String getClassIdentity()`: 教室の情報を「科目名 managed by 教員名」として返す<br>
`int getNumberOfStudents()`: 生徒の数を返します。出力する問題<br>

## テストケース
`classroom1 = new Classroom([new Student("AC-343424", "James", "Smith", 6), new Student("AC-343428", "Maria", "Garcia", 5),new Student("AC-343434", "Robert", "Johnson", 3),new Student("AC-343454","Danny", "Robertson",10)], "Algebra II", "Emily Theodore")`<br>
`classroom1.getClassIdentity() --> Algebra II managed by Emily Theodore`<br>
`classroom1.getNumberOfStudents() --> 4`<br>

`classroom2 = new Classroom([new Student("AC-340014","Kent", "Carter",9), new Student("AC-340024","Isaiah", "Chambers",10),new Student("AC-340018","Leta", "Ferguson", 7)], "English", "Daniel Pherb")`<br>
`classroom2.getClassIdentity() --> English managed by Daniel Pherb`<br>
`classroom2.getNumberOfStudents() --> 3`<br>

**拡張分**
`classroom1 = new Classroom([new Student("AC-343424", "James", "Smith", 6), new Student("AC-343428", "Maria", "Garcia", 5),new Student("AC-343434", "Robert", "Johnson", 3),new Student("AC-343454","Danny", "Robertson",10)], "Algebra II", "Emily Theodore")`<br>

`classroom2 = new Classroom([new Student("AC-340014","Kent", "Carter",9), new Student("AC-340024","Isaiah", "Chambers",10),new Student("AC-340018","Leta", "Ferguson",7)], "English", "Daniel Pherb")`<br>

`school = [classroom1, classroom2]`<br>

`printHonorsStudents(school)`<br>
`--> AC-343454: Danny Robertson(10gr) from Emily Theodore's class`<br>
`--> AC-340024: Isaiah Chambers(10gr) from Daniel Pherb's class`<br>

## 思考プロセス
・StudentクラスをつくりClassroomクラスを作成する<br>
・これまでつくったクラスを活かして、追加する

## 工夫した点
・sprintf()を調べて使ってみたこと<br>
・なるべく今あるメソッドを使おうとしたこと<br>

## 改善点
・forEachを使った方法（他の方のコードからの学び）<br>