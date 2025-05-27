import { Node } from './Node.js'
import { SinglyLinkedList } from "./SinglyLinkedList.js";

export function doubleEvenNumber(head){
    // headは連結リストの先頭ノードを表す
    let iterator = head;
    let i = 0;
    while(iterator !== null){
        let currNode = iterator;
        console.log(currNode.data);

        iterator = iterator.next;
        if(i % 2 === 0){
            currNode.addNextNode(new Node(currNode.data * 2));
            console.log(currNode.next.data);
        }
        i++;
    }
}