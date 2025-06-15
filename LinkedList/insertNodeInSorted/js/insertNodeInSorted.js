import { Node } from '../../Common/js/Node.js';

export function insertNodeInSorted(head,data){
    const newNode = new Node(data);

    if(head === null || data < head.data){
        newNode.next = head;
        return newNode;
    }

    let currentNode = head;
    while(currentNode.next !== null && currentNode.next.data < data){
        currentNode = currentNode.next;
    }

    newNode.next = currentNode.next;
    currentNode.next = newNode;

    return head;
}
