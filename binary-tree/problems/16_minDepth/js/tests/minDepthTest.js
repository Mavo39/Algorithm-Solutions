const minDepth = require('../src/minDepth.js');
const toBinaryTree = require('../../../../src/js/toBinaryTree.js');

const tests = {
    case1 : {
        'input' : [8,9,11], 
        'output' : 1
    }, 
    case2 : {
        'input' : [93,16,65,80],
        'output' : 1
    }, 
    case3 : {
        'input' : [92,88,53,36,27,16,80,45],
        'output' : 2
    }, 
    case4 : {
        'input' : [44,12,49,3,29,46,62,null,null,null,null,null,null,null,70],
        'output' : 2
    }, 
    case5 : {
        'input' : [19,34,73,39,56,4,86,17,84,34],
        'output' : 2
    }, 
    case6 : {
        'input' : [97,10,77,32,40,70,32,96,27,10,12,93,82,33,55,71,59,82,37,75,25,31,14,96,85,41,28,70,9,56,8,90,8,65,49,45,34,30,25,7,7,97,23,66,84,57,38,38,95,9,77,60,44,3,81,41,89,90,73,100,86,53,96,40],
        'output' : 5
    }, 
    case7 : {
        'input' : [null],
        'output' : 0
    }
};

for(let [key, test] of Object.entries(tests)){
    const root = toBinaryTree(test['input']);
    const res = minDepth(root);
    const resCheck = (res === test['output']) ? "True" : "False";

    console.log(`Test ${key}: ${resCheck}`);
}