export function reverseLinkedList(head){
    let prev = null;
    let current = head;

    while(current !== null){
        let nextNode = current.next;
        current.next = prev;
        prev = current;
        current = nextNode;
    }
    head = prev;

    return prev;
}

export function printFromNode(node){
    let iterator = node;
    let str = '';

    while(iterator !== null){
        str += iterator.data;
        if(iterator.next !== null){
            str += '➡';
        }
        iterator = iterator.next;
    }
    console.log(str);
}