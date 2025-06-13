import { Node } from '../../Common/js/Node.js';

export function insertNodeInSorted(head,data){
    if(head === null) return null;

    const newNode = new Node(data);
    let currentNode = head;

    while(currentNode !== null){
        if(newNode.data < currentNode.data){
            head = newNode;
            newNode.next = currentNode;
            break;
        }

        if (currentNode.data <= newNode.data && newNode.data <= currentNode.next.data){
            const temp = currentNode.next;
            currentNode.next = newNode;
            newNode.next = temp;
            break;
        }
        
        if(currentNode.data <= newNode.data && currentNode.next === null){
            currentNode.next = newNode;
            newNode.next = null;
        } 

        currentNode = currentNode.next;
    }

    return head;
}
