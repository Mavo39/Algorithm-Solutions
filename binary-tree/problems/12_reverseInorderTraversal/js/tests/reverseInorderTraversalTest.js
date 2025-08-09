const toBinaryTree = require('../../../../src/js/toBinaryTree.js');
const reverseInorderTraversal = require('../src/reverseInorderTraversal.js');

const tests = {
    case1 : {
        'input' : [0,-10,5,null,-3,null,9],
        'output' : [9,5,0,-3,-10]
    }, 
    case2 : {
        'input' : [5,3,6,2,4,null,7],
        'output' : [7,6,5,4,3,2]
    },
    case3 : {
        'input' : [-2,-17,8,-18,-11,3,19,null,null,null,-4,null,null,null,25],
        'output' : [25,19,8,3,-2,-4,-11,-17,-18]        
    },
    case4 : {
        'input' : [3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19],
        'output' : [19,18,15,13,8,6,5,3,2,1,0,-3,-4,-7,-10]        
    },
    case5 : {
        'input' : [1,-5,15,-9,-4,10,17,null,-6,null,0,null,14,16,19],
        'output' : [19,17,16,15,14,10,1,0,-4,-5,-6,-9]        
    },   
    case6 : {
        'input' : [3,-3,13,-7,1,6,18,-10,-4,0,2,5,8,15,19],
        'output' : [19,18,15,13,8,6,5,3,2,1,0,-3,-4,-7,-10]        
    },
};

function reverseInorderTraversalTest(){
    for(let test in tests){
        const root = toBinaryTree(test['input']);
        const resArr = reverseInorderTraversal(root);
        const expected = test['output'];
        const res = resArr === expected ? "True" : "False";
        console.log(res);
    }
}

reverseInorderTraversalTest();