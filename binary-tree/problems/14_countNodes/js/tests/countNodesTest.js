const toBinaryTree = require('../../../../src/js/toBinaryTree.js');
const countNodes = require('../src/countNodes.js');

const tests = {
    case1: {
        'input': [6,11,25],
        'output': 3
    },
    case2: {
        'input': [1,1,2,15,8],
        'output': 5
    },
    case3: {
        'input': [6,11,25,5,9,8,4,56],
        'output': 8  
    },
    case4: {
        'input': [27,14,35,10,19,31,42],
        'output': 7  
    },
    case5: {
        'input': [30,15,60,7,22,45,75,17,27,12,14,5,79,110],
        'output': 14  
    }
};

function countNodesTest(tests){
    for(let [key, test] of Object.entries(tests)){
        const root = toBinaryTree(test['input']);
        const res = countNodes(root);
        const resCheck = (res === test['output']) ? "True" : "False";

        console.log(`Test ${key}: ${resCheck}`);
    }
}

countNodesTest(tests);
