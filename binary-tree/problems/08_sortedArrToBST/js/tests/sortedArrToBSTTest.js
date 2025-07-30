const sortedArrToBST = require('../src/sortedArrToBST.js');
const binarySubtreeToArray = require('../../../../src/js/binarySubtreeToArray.js');

// 1.
console.log(binarySubtreeToArray(sortedArrToBST([1,2,3])));

// 2.
console.log(binarySubtreeToArray(sortedArrToBST([1,2,3,5,6,9,10])));

// 3.
console.log(binarySubtreeToArray(sortedArrToBST([-1,0,3,10,13,19,22])));

// 4.
console.log(binarySubtreeToArray(sortedArrToBST([1,3,4,5,8])));

// 5.
console.log(binarySubtreeToArray(sortedArrToBST([1,4,6,10,11,14,15,20,22,25,50,61,68,72])));