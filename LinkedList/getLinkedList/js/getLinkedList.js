import { SinglyLinkedListNode } from "./SinglyLinkedListNodeClass.js";

export function getLinkedList(arr){
    if(arr.length === 0) return null;

    const head = new SinglyLinkedListNode(arr[0]);
    let currNode = head;

    for(let i = 1; i < arr.length; i++){
        currNode.next = new SinglyLinkedListNode(arr[i]);
        currNode = currNode.next;
    }

    return head;
}

export function printNodeDate(head){
    let currNode = head;
    while(currNode !== null){
        console.log(currNode.data);
        currNode = currNode.next;
    }
    console.log();
}