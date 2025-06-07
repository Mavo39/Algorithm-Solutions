import { SinglyLinkedList } from '../../Common/js/SinglyLinkedList.js';

export function linkedListLength(head){
    if(head === null) return 0;

    let count = 0;
    let currentNode = head;

    while(currentNode !== null){
        count++;
        currentNode = currentNode.next;
    }

    return count;
}