const fireEmployees = require('./solution');

console.log(fireEmployees(["Steve","David","Mike","Donald","Lake","Julian"],["Donald","Lake"]));
console.log(fireEmployees(["Donald","Lake"],["Donald","Lake"]));
console.log(fireEmployees(["Steve","David","Mike","Donald","Lake","Julian"],[]));
console.log(fireEmployees(["Mike","Steve","David","Mike","Donald","Lake","Julian"],["Mike"]));
console.log(fireEmployees(["Kailey","Kailey"],["Kailey"]));
