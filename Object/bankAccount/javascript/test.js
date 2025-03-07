const BankAccount = require('./solution');

let user1 = new BankAccount("Chase", "Claire Simmmons", 30000);
console.log(user1.withdrawMoney(2000));
console.log(user1.depositMoney(10000));
console.log(user1.pastime(93));

let user2 = new BankAccount("Bank Of America", "Remy Clay", 10000);
console.log(user2.withdrawMoney(5000));
console.log(user2.depositMoney(12000));
console.log(user2.pastime(505));