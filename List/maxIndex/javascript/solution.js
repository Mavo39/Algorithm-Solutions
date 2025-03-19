function getMaxIndex(arr){
    let maxIndex = 0;
    for(let i = 0; i < arr.length; i++){
        if(arr[i] >= arr[maxIndex]) maxIndex = i;
    }
    return maxIndex;
}

module.exports = getMaxIndex;