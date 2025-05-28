import { Node } from './Node.js';

export class SinglyLinkedList {
    constructor(arr){
        this.head = arr.length > 0 ? new Node(arr[0]) : null;
        let iterator = this.head;

        for(let i = 1; i < arr.length; i++){
            iterator.next = new Node(arr[i]);
            iterator = iterator.next;
        }
    }
}