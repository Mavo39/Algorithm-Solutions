import { Stack } from '../../Common/js/Stack.js';

export function reverse(arr){
    if(arr.length === 0) return [];

    let stack = new Stack();
    for(const ele of arr){
        stack.push(ele);
    }

    let newArr = [];
    while(stack.peek() !== null){
        newArr.push(stack.pop());
    }

    return newArr;
}