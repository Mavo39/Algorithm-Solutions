const toBinaryTree = require('../../../../src/js/toBinaryTree.js');

// 1.
let root1 = toBinaryTree([0,-10,5,null,-3,null,9]);
console.log(root1.data);

// 2.
let root2 = toBinaryTree([5,2,18,-4,3]);
console.log(root2.left.data);

// 3.
let root3 = toBinaryTree([27,14,35,10,19,31,42]);
console.log(root3.left.right.data);

// 4.
let root4 = toBinaryTree([10,null,3]);
console.log(root4.left);

// 5.
let root5 = toBinaryTree([10,9]);
console.log(root5.data);

// 6. 
let root6 = toBinaryTree([null]);
console.log(root6);