function sumOfArray(arr){
    if(arr.length === 0) return 0;
    else return sumOfArrayHelper(arr, 0, arr.length-1);
}

function sumOfArrayHelper(arr, start, end){
    if(start === end) return arr[start];

    let mid = Math.floor((start + end) / 2);
    let leftArr = sumOfArrayHelper(arr, start, mid);
    let rightArr = sumOfArrayHelper(arr, mid+1, end);

    return leftArr + rightArr;
}

module.exports = sumOfArray;