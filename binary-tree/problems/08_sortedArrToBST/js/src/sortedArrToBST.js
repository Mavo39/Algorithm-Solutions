const BinaryTree = require('../../../../src/js/BinaryTree');

function sortedArrToBST(numberList){
    let len = numberList.length;

    if(len === 0) return null;
    else return sortedArrToBSTHelper(numberList, 0, len-1);
}

function sortedArrToBSTHelper(arr, start, end){
    // ベースケース: 部分配列に要素が1つだけのとき、葉ノードを作成
    if(start === end) return new BinaryTree(arr[start]);

    // 再帰ケース: 部分配列を左右に分割して左右の子ノードを構築
    let mid = Math.floor((start + end) / 2);
    
    let left = start < mid ? sortedArrToBSTHelper(arr, start, mid-1) : null;
    let right = mid < end ? sortedArrToBSTHelper(arr, mid+1, end) : null;

    return new BinaryTree(arr[mid], left, right);
}

module.exports = sortedArrToBST;
