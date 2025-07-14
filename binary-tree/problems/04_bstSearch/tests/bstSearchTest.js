const bstSearch = require('../src/js/bstSearch.js');
const toBinaryTree = require('../../../src/js/toBinaryTree.js');
const binarySubtreeToArray = require('../../../src/js/binarySubtreeToArray.js');

const root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
const result1 = bstSearch(root1, 5);
console.log(binarySubtreeToArray(result1));

const root2 = toBinaryTree([0,-10,5,null,-3,null,9]);
const result2 = bstSearch(root2, 20);
console.log(binarySubtreeToArray(result2));

const root3 = toBinaryTree([5,3,6,2,4,null,7]);
const result3 = bstSearch(root3, 3);
console.log(binarySubtreeToArray(result3));

const root4 = toBinaryTree([5,3,6,2,4,null,7]);
const result4 = bstSearch(root4, 5);
console.log(binarySubtreeToArray(result4));

const root5 = toBinaryTree([5,3,6,2,4,null,7]);
const result5 = bstSearch(root5, 15);
console.log(binarySubtreeToArray(result5));