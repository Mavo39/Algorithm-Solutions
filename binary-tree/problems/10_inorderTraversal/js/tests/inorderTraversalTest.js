const toBinaryTree = require('../../../../src/js/toBinaryTree.js');
const inorderTraversal = require('../src/inorderTraversal.js');

// 1. 
let root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
console.log(inorderTraversal(root1));

// 2.
let root2 = toBinaryTree([5,3,6,2,4,null,7]);
console.log(inorderTraversal(root2));

// 3.
let root3 = toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]);
console.log(inorderTraversal(root3));

// 4.
let root4 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
console.log(inorderTraversal(root4));

// 5.
let root5 = toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]);
console.log(inorderTraversal(root5));

// 6.
let root6 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
console.log(inorderTraversal(root6));