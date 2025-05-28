export class Node {
    constructor(data){
        this.data = data;
        this.next = null;
    }

    addNextNode(nextNode){
        let tempNode = this.next;
        this.next = nextNode;
        nextNode.next = tempNode;
    }
}