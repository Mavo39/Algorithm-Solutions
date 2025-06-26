const Deque = require('../../../../src/js/Deque/Deque.js');

function getMaxWindow(arr, k){
    let resArr = [];
    if(arr.length === 0 || arr.length < k) return resArr;

    // インデックスを管理する
    let deque = new Deque();

    for(let i = 0; i < k; i++){
        while(deque.peekBack() !== null && arr[deque.peekBack()] <= arr[i]){
            deque.dequeueBack();
        }
        deque.enqueueBack(i);
    }

    for(let i = k; i < arr.length; i++){
        while(deque.peekFront() !== null && deque.peekFront() <= i-k) deque.dequeueFront();
        while(deque.peekBack() !== null && arr[deque.peekBack()] <= arr[i]) deque.dequeueBack();
        deque.enqueueBack(i);
        resArr.push(arr[deque.peekFront()]);
    }

    return resArr;
}

module.exports = getMaxWindow;