import { Node } from '../../Common/js/Node.js';

export function linkedListSearch(head, data){
    if(head === null) return -1;

    let index = 0;
    let currentNode = head;

    while(currentNode !== null){
        if(currentNode.data === data){
            return index;
        }
        currentNode = currentNode.next;
        index++;
    }

    return -1;
}