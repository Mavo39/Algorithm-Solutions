const bstSearch = require('../src/js/bstSearch.js');
const toBinaryTree = require('../../../src/js/toBinaryTree.js');

let root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
console.log(bstSearch(root1, 5));

let root2 = toBinaryTree([0,-10,5,null,-3,null,9]);
console.log(bstSearch(root2, 20));

let root3 = toBinaryTree([5,3,6,2,4,null,7]);
console.log(bstSearch(root3, 3));

let root4 = toBinaryTree([5,3,6,2,4,null,7]);
console.log(bstSearch(root4, 5));

let root5 = toBinaryTree([5,3,6,2,4,null,7]);
console.log(bstSearch(root5, 15));