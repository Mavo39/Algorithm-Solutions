const getMaxWindow = require('../src/getMaxWindow.js');

// テストケースを検証する関数
function getMaxWindowTest(arr, k, expected){
    const resArr = getMaxWindow(arr, k);

    if(expected === resArr){
        console.log("True");
    } else {
        console.log("False");
    }
}

// 1. 
getMaxWindowTest([1,3,-1,-3,5,3,6,7], 3, [3,3,5,5,6,7]);

// 2.
getMaxWindowTest([5,5,5,5,5], 2, [5,5,5,5]);

// 3.
getMaxWindowTest([1,2,3,4,5,6], 3, [3,4,5,6]);

// 4.
getMaxWindowTest([6,5,4,3,2,1], 2, [6,5,4,3,2]);

// 5.
getMaxWindowTest([4,2], 3, []);

// 6.
getMaxWindowTest([-1,-3,5,3,6,7], 3, [5,5,6,7]);

// 7.
getMaxWindowTest([4,2,12,3,8], 1, [4,2,12,3,8]);