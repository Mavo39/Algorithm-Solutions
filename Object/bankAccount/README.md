# BankAccount クラスを作成し、テストケースを出力する問題

## データ
`String bankName`: 銀行口座を管理する銀行名<br>
`String ownerName`: 銀行口座の所有者の名前<br>
`int savings`: 銀行口座の中に現在ある合計貯蓄額<br>
`int depositMoney(int depositAmount)`: depositAmount によって貯蓄額を増やし、その金額を int 型で返します。もし預金前の貯蓄額が $20,000 以下の場合は、$100 の手数料がかかります。<br>
`int withdrawMoney(int withdrawAmount)`: withdrawAmount によって貯蓄額を減らし、残りの貯蓄額を整数として返します。最大で貯蓄額の 20% を引き出すことができます。<br>
`double pastime(int days)`: 口座に毎日 0.25 ドル振り込まれていくとき、貯蓄金額を double 型で返します。<br>

## テストケース
`user1 = new BankAccount("Chase", "Claire Simmmons", 30000)`<br>
`user1.withdrawMoney(2000) --> 28000`<br>
`user1.depositMoney(10000) --> 38000`<br>
`user1.pastime(93) --> 38023.25`<br>

`user2 = new BankAccount("Bank Of America", "Remy Clay", 10000)`<br>
`user2.withdrawMoney(5000) --> 8000`<br>
`user2.depositMoney(12000) --> 19900`<br>
`user2.pastime(505) --> 20026.25`<br>

## 解き方
・クラスを作成し、個別にインスタンスを作成する<br>

## 試したこと
