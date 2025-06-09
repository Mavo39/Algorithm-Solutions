import { Node } from '../../Common/js/Node.js';

export function deleteTail(head){
    if(head === null || head.next === null) return null;

    let currentNode = head;
    while(currentNode.next.next !== null){
        currentNode = currentNode.next;
    }
    // 末尾ノードを切る
    currentNode.next = null;
    
    return head;
}