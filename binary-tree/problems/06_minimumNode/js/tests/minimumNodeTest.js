const minimumNode = require('../src/minimumNode.js');
const toBinaryTree = require('../../../../src/js/toBinaryTree.js');
const binarySubtreeToArray = require('../../../../src/js/binarySubtreeToArray.js');

// 1.
const root1 = toBinaryTree([]);
console.log(binarySubtreeToArray(minimumNode(root1)));

// 2.
const root2 = toBinaryTree([0,-10,5,null,-3,null,9]);
console.log(binarySubtreeToArray(minimumNode(root2)));

// 3.
const root3 = toBinaryTree([5,3,6,2,4,null,7]);
console.log(binarySubtreeToArray(minimumNode(root3)));

// 4.
const root4 = toBinaryTree([-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25]);
console.log(binarySubtreeToArray(minimumNode(root4)));

// 5.
const root5 = toBinaryTree([3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19]);
console.log(binarySubtreeToArray(minimumNode(root5)));

// 6.
const root6 = toBinaryTree([1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19]);
console.log(binarySubtreeToArray(minimumNode(root6)));