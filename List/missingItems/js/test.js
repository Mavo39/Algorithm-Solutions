const missingItems = require('./solution');

console.log(missingItems([1,2,3,4,5,6,7,8],[1,3,5]));
console.log(missingItems([1,2,3,4,5],[1,2]));
console.log(missingItems([1,1],[2,2]));
console.log(missingItems([9,8,7,6,5],[1,2]));
console.log(missingItems([1,2],[9,8,7,6,5]));
console.log(missingItems([3,4,5,1,2],[1,2]));
console.log(missingItems([8,3,45,67,23,9,3],[5,7]));
console.log(missingItems([8,3,45,67,23,9,3],[5,45]));
console.log(missingItems([8,3,45,67,23,9,3],[3]));
console.log(missingItems([8,3,45,67,23,9,3],[]));