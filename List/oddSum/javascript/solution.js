function sumOfOddElement(arr){
    let totalOfOdd = 0;
    for(let i = 0; i < arr.length; i++){
        if(isOdd(arr[i])) totalOfOdd += arr[i];
    }
    return totalOfOdd;
}

function isOdd(number){
    return number % 2 == 1;
}

module.exports = sumOfOddElement;