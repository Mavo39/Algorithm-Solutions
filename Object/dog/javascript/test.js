const Dog = require('./solution');

let goldenRetriever = new Dog("Golden Retriever", 60, 10);
console.log(goldenRetriever.bark());
console.log(goldenRetriever.calcHumanAge());

let siberianHusky = new Dog("siberianHusky", 55, 6);
console.log(siberianHusky.bark());
console.log(siberianHusky.calcHumanAge());

let poodle = new Dog("poodle", 10, 1);
console.log(poodle.bark());
console.log(poodle.calcHumanAge());

let shibaInu = new Dog("shibaInu", 35, 4);
console.log(shibaInu.bark());
console.log(shibaInu.calcHumanAge());
