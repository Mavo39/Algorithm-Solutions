// 再帰
function recursiveDigitsAdded(digits){
    return recursiveDigitsAddedHelper(digits, 0, 0);
}

function recursiveDigitsAddedHelper(digits, total, finalTotal){
    if(digits < 10){
        total += digits;
        if(total < 10) return total + finalTotal;
        return recursiveDigitsAddedHelper(total, 0, finalTotal + total)
    }
    return recursiveDigitsAddedHelper(Math.floor(digits / 10), total + digits % 10, finalTotal);
}

// whileループ
// function splitAndAdd(digits){
//     let total = 0;
//     while(digits > 0){
//         total += digits % 10;
//         digits = Math.floor(digits / 10);
//     }
//     return total;
// }

// function recursiveDigitsAdded(digits){
//     if(digits < 10){
//         return digits;
//     }

//     let total = 0;
//     while(digits >= 10){
//         digits = splitAndAdd(digits);
//         total += digits;
//     }
//     return total; 
// }

module.exports = recursiveDigitsAdded;