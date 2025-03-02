const Animal = require('./solution');

let rabbit = new Animal("rabbit", 10, 0.3, false, 20);
console.log(rabbit.getBmi());
console.log(rabbit.isDangerous());

let snake = new Animal("snake", 30, 1, true, 30);
console.log(snake.isDangerous());
console.log(snake.getDailyCalories());

let elephant = new Animal("elephant", 300, 3, false, 5);
console.log(elephant.getBmi());
console.log(elephant.getDailyCalories());

let gazelle = new Animal("gazelle", 50, 1.5, false, 100);
console.log(gazelle.getDailyCalories());
console.log(gazelle.isDangerous());