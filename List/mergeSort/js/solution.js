function mergeSort(arr){
    if(arr.length === 0) return [];
    else return mergeSortHelper(arr, 0, arr.length-1);
}

function mergeSortHelper(arr, startIndex, endIndex){
    if(startIndex === endIndex){
        let element = arr[startIndex];
        return [element];
    }

    midIndex = Math.floor((startIndex + endIndex) / 2);
    let leftArr = mergeSortHelper(arr, startIndex, midIndex);
    let rightArr = mergeSortHelper(arr, midIndex+1, endIndex);

    const SENTINEL = Infinity;
    leftArr.push(SENTINEL);
    rightArr.push(SENTINEL);

    const merged = [];
    let li = 0;
    let ri = 0;

    // 要素が残っている間はマージ
    while(li < leftArr.length-1 || ri < rightArr.length-1){
        if(leftArr[li] <= rightArr[ri]){
            merged.push(leftArr[li++]);
        }
        else {
            merged.push(rightArr[ri++]);
        }
    }
    return merged;
}

module.exports = mergeSort;