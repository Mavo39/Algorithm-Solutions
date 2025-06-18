import { Stack } from '../../Common/js/Stack.js';

export function reverse(arr){
    if(arr.length === 0) return [];

    let stack = new Stack();
    for(let i = 0; i < arr.length; i++){
        stack.push(arr[i]);
    }

    let newArr = [];
    for(let i = 0; i < stack.length; i++){
        newArr.push(stack.pop());
    }

    return newArr;
}