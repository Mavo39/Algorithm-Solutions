const swapCase = require('../src/swapCase.js');

const tests = {
    "case1": {
        "input": ['l','A','m','b','D','A'],
        "output": ['L','a','M','B','d','a']
    },
    "case2": {
        "input": ['a','E','s','P','A'],
        "output": ['A','e','S','p','a']
    },
    "case3": {
        "input": ['f','U','N','c','T','I','o','n'],
        "output": ['F','u','n','C','t','i','O','N']
    }
}

for(let [key, value] of Object.entries(tests)){
    const output = swapCase(value['input']);
    const result = JSON.stringify(output) === JSON.stringify(value['output']) ? "True" : "False";
    console.log(`Test ${key}: ${result}`);
}